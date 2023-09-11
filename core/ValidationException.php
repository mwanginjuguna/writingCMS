<?php

namespace Core;

use Exception;

class ValidationException extends Exception
{

    protected array $errors;
    protected array $old;

    /**
     * @param array $errors
     * @param array $old
     * @return mixed
     * @throws ValidationException
     */
    public static function throw(array $errors, array $old): mixed
    {
        $instance = new static;

        $instance->errors = $errors;
        $instance->old = $old;

        throw $instance;
    }

    /**
     * errors getter
     * @return array
     */
    public function getErrors(): array
    {
        return $this->errors;
    }

    /**
     * getter for $old
     * @return array
     */
    public function getOld(): array
    {
        return $this->old;
    }
}
