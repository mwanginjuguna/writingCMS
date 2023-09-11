<?php

namespace Core;

use Exception;

class App
{
    protected static Container $container;

    /**
     * @param Container $container
     * @return void
     */
    public static function setContainer(Container $container): void
    {
        static::$container = $container;
    }

    /**
     * container
     * @return Container
     */
    public static function container(): Container
    {
        return static::$container;
    }

    /**
     * @param string $key
     * @param callable $resolver
     * @return void
     */
    public static function bind(string $key, callable $resolver): void
    {
        static::container()->bind($key, $resolver);
    }

    /**
     * @param $key
     * @return mixed
     * @throws Exception
     */
    public static function resolve($key): mixed
    {
        return static::container()->resolve($key);
    }
}
