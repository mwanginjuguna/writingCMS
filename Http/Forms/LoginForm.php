<?php

namespace Http\Forms;

use Core\ValidationException;
use Core\Validator;

class LoginForm
{
    protected array $errors = [];

    public function __construct(public array $attributes)
    {
        if (!Validator::email($this->attributes['email'])) {
            $this->errors['email'] = "Not a Valid email address!";
        }

        if (!Validator::string($this->attributes['password'])) {
            $this->errors['password'] = "Unsupported password format!";
        }
    }

    /**
     * Validate password and email for login form.
     * @param array $attributes
     * @return null|LoginForm
     * @throws ValidationException
     */
    public static function validate(array $attributes): null|LoginForm
    {
        // verify email format
        $instance = new static($attributes);

        return $instance->failed() ? $instance->throw() : $instance;
    }

    /**
     * throw an exception
     * @return void
     * @throws ValidationException
     */
    public function throw(): void
    {
        ValidationException::throw($this->errors(), $this->attributes);
    }

    /**
     * Errors getter
     * @return array
     */
    public function errors(): array
    {
        return $this->errors;
    }

    /**
     * Check if validation failed = !empty($errors[])
     * @return int
     */
    public function failed(): int
    {
        return count($this->errors); // consider isset() or empty() cos the goal is to check whether the array is set
    }

    /**
     * append an error into the errors
     * @param $field
     * @param $value
     * @return LoginForm
     */
    public function error($field, $value): LoginForm
    {
        $this->errors[$field] = $value;
        return $this;
    }
}
