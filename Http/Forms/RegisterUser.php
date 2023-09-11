<?php

namespace Http\Forms;


use Core\Database;

class RegisterUser extends LoginForm
{
    /**
     * Check if user exists
     * @param Database $database
     * @param string $email
     * @return bool
     */
    public function exists(Database $database, string $email): bool
    {
        $user = $database->query('select * from users where email = :email', [
            ":email" => $email
        ])->find();

        if ($user) {
            return true;
        }

        return false;
    }

    /**
     * Create a new user
     * @param Database $db
     * @param
     * @return RegisterUser
     */
    public function register(Database $db, $attributes): static
    {
        $db->query('INSERT INTO users(email, password) VALUES(:email, :password)', [
            ':email' => $attributes['email'],
            ':password' => password_hash($attributes['password'], PASSWORD_BCRYPT)
        ]);

        return $this;
    }
}
