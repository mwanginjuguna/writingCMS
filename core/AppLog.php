<?php

namespace Core;

use Monolog\Handler\StreamHandler;
use Monolog\Level;
use Monolog\Logger;
use Stringable;

class AppLog
{
    public static Logger $logger;

    public static function initialize($name = 'appLog', $path = 'storage/logs/app.log'): void
    {
        if (!isset(self::$logger)) {
            self::$logger = new Logger($name);
            $streamHandler = new StreamHandler(basePath($path));
            self::$logger->pushHandler($streamHandler);
        }
    }

    /**
     * @param Level $level
     * @param Stringable|string $message
     * @param array $context
     * @return void
     */
    public static function log(Level $level = Level::Debug, Stringable|string $message = '', array $context = []): void
    {
        self::initialize();
        static::$logger->log($level, message: $message, context: $context);
    }

    /**
     * @param Stringable|string $message
     * @param array $context
     * @return void
     */
    public static function logError(Stringable|string $message, array $context = []): void
    {
        self::initialize();
        static::$logger->error(message: $message, context: $context);
    }

    /**
     * @param Stringable|string $message
     * @param array $context
     * @return void
     */
    public static function logWarning(Stringable|string $message, array $context = []): void
    {
        self::initialize();
        static::$logger->warning(message: $message, context: $context);
    }

    /**
     * @param Stringable|string $message
     * @param array $context
     * @return void
     */
    public static function logInfo(Stringable|string $message, array $context = []): void
    {
        self::initialize();
        static::$logger->info(message: $message, context: $context);
    }

    /**
     * @param Stringable|string $message
     * @param array $context
     * @return void
     */
    public static function logNotice(Stringable|string $message, array $context = []): void
    {
        self::initialize();
        static::$logger->notice(message: $message, context: $context);
    }

    /**
     * @param Stringable|string $message
     * @param array $context
     * @return void
     */
    public static function logAlert(Stringable|string $message, array $context = []): void
    {
        self::initialize();
        static::$logger->alert(message: $message, context: $context);
    }

    /**
     * @param Stringable|string $message
     * @param array $context
     * @return void
     */
    public static function logCritical(Stringable|string $message, array $context = []): void
    {
        self::initialize();
        static::$logger->critical(message: $message, context: $context);
    }

    /**
     * @param Stringable|string $message
     * @param array $context
     * @return void
     */
    public static function logEmergency(Stringable|string $message, array $context = []): void
    {
        self::initialize();
        static::$logger->emergency(message: $message, context: $context);
    }
}
