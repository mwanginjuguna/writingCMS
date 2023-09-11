<?php

namespace Core;

class Authenticator
{
    /**
     * attempt to authenticate the user
     * @param Database $db
     * @param string $email
     * @param string $password
     * @return bool
     */
    public function attempt(Database $db, string $email, string $password): bool
    {
        // verify email exists by querying db
        $user = $db->query('select * from users where email = :email', [":email" => $email])->find();

        if ($user && password_verify($password, $user['password'])) {

            $this->login([
                'email' => $email
            ]);

            return true;
        }

        return false;
    }

    /**
     * login a user
     * @param mixed
     * @return void
     */
    public function login(mixed $user): void
    {
        $_SESSION['user'] = [
            'email' => $user['email']
        ];

        session_regenerate_id(true);
    }

    /**
     * logout a user
     * @return void
     */
    public function logout(): void
    {
        Session::destroy();
    }
}
