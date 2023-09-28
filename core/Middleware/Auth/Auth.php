<?php

namespace Core\Middleware\Auth;

class Auth {

    /**
     * Middleware handler for authenticated user
     * @return void
     */
    public function handle(): void
    {
        if (! $_SESSION['user'] ?? false) {
            header('location: /');
            exit();
        }
    }
}
