<?php

namespace Core;

use Exception;

class Container
{
    protected array $bindings = [];

    /**
     * bind into service container
     *
     * @param string $key
     * @param callable $resolver
     * @return void
     */
    public function bind(string $key, callable $resolver): void
    {
        $this->bindings[$key] =  $resolver;
    }

    /**
     * resolve objects from service container
     * @param string $key
     * @return mixed
     * @throws Exception
     */
    public function resolve(string $key): mixed
    {
        if (!array_key_exists($key, $this->bindings)) {
            throw new Exception("No matching binding was found for {$key}");
        }

        $resolver = $this->bindings[$key];

        return call_user_func($resolver);
    }
}
