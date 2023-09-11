<?php

namespace Core;

class Validator{
    public static function string($value, $min = 1, $max = INF): bool
    {
        $value = trim($value);
        return strlen($value) >= $min && strlen($value) <= $max;
    }

    /**
     * @param $value
     * @return bool
     */
    public static function email($value): bool
    {
        $value = trim($value);
        return filter_var($value, FILTER_VALIDATE_EMAIL);
    }

    /**
     * @param string $value
     * @return mixed
     */
    public static function url(string $value): mixed
    {
        $value = trim($value);
        return filter_var($value, FILTER_VALIDATE_URL);
    }
}
