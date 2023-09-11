<?php

namespace Core;

class Session
{
    /**
     * save session to database
     * @param Database $database
     * @return void
     */
    public function save(Database $database): void
    {
        $sessionId = session_id();
        $ipAddress = $_SERVER['REMOTE_ADDR'];
        $userAgent = $_SERVER['HTTP_USER_AGENT'];
        $url = BASE_URL.$_SERVER['REQUEST_URI'];

        if (!$this->exists($database, $sessionId)) {
            $database->query('INSERT INTO sessions(session_id, ip_address, user_agent, last_activity) VALUES(:session_id, :ip_address, :user_agent, CURRENT_TIMESTAMP)', [
                ":session_id" => $sessionId,
                ":ip_address" => $ipAddress,
                ":user_agent" => $userAgent,
            ]);
        }
        $database->query('UPDATE sessions SET last_activity = CURRENT_TIMESTAMP WHERE ip_address=:ip_address', [
            ":ip_address" => $ipAddress
        ]);
    }

    /**
     * check if session exists in database
     * @param Database $database
     * @param string $sessionId
     * @return bool
     */
    public function exists(Database $database, string $sessionId): bool
    {
        $session = $database->query('SELECT * FROM sessions WHERE session_id = :sessionId', [
            ":sessionId" => $sessionId
        ])->find();

        return (bool)$session;
    }

    /**
     * Put into session
     * @param $key
     * @param $value
     * @return void
     */
    public static function put($key, $value): void
    {
        $_SESSION[$key] = $value;
    }

    /**
     * Get from session
     * @param $key
     * @param $default
     * @return mixed|null
     */
    public static function get($key, $default = null): mixed
    {
        return $_SESSION['_flashed'][$key] ?? $_SESSION[$key] ?? $default;
    }

    /**
     * Check if a key exists in session
     * @param $key
     * @return bool
     */
    public static function has($key): bool
    {
        return (bool) static::get($key);
    }

    /**
     * set flash
     * @param $key
     * @param $value
     * @return void
     */
    public static function flash($key, $value): void
    {
        $_SESSION['_flashed'][$key] = $value;
    }

    /**
     * clear flash
     * @return void
     */
    public static function unflash(): void
    {
        unset($_SESSION['_flashed']);
    }

    /**
     * session flush
     */
    public static function flush()
    {
        $_SESSION = [];
    }

    /**
     * destroy a session completely
     */
    public static function destroy(): void
    {
        static::flush();

        session_destroy();

        $params = session_get_cookie_params();
        setcookie('PHPSESSID', '', time() - 3600, $params['path'], $params['domain'], $params['secure'], $params['httponly']);
    }
}
