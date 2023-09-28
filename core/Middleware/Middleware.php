<?php

namespace Core\Middleware;

use Core\Middleware\Auth\Auth;
use Core\Middleware\Auth\Guest;
use Exception;

class Middleware
{
    public const MAP = [
        "auth" => Auth::class,
        "guest" => Guest::class
    ];

    /**
     * Resolve and handle middleware
     * @throws Exception
     */
    public static function resolve($key): void
    {
        if (!$key) {
            return;
        }

        $middleware = static::MAP[$key] ?? false;

        if (!$middleware) {
            throw new Exception("No Matching Middleware found for key {$key}.");
        }

        (new  $middleware)->handle();
    }
}
