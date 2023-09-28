<?php

namespace Core\Middleware\Auth;

class Guest {

    /**
     * Middleware handler for guest user
     * @return void
     */
    public function handle(): void
    {
        if ($_SESSION['user'] ?? false) {
            header('location: /');
            exit();
        }
    }
}
