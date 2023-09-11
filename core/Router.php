<?php

namespace Core;

use Core\Middleware\Middleware;
use Exception;

class Router {
    public array $routes = [];

    /**
     * @param string $method
     * @param string $uri
     * @param string $controller
     * @return Router
     */
    public function add(string $method, string $uri, string $controller): Router
    {
        $this->routes[] = [
            "method" => $method,
            "uri" => $uri,
            "controller" => $controller,
            "middleware" => null
        ];
        return $this;
    }

    /**
     * Get a resource
     * @param string $uri
     * @param string $controller
     * @return Router
     */
    public function get(string $uri, string $controller): Router
    {
        return $this->add('GET', $uri, $controller);
    }

    /**
     * POST a resource
     * @param string $uri
     * @param string $controller
     * @return Router
     */
    public function post(string $uri, string $controller): Router
    {
        return $this->add('POST', $uri, $controller);
    }

    /**
     * Patch a resource
     * @param string $uri
     * @param string $controller
     * @return Router
     */
    public function patch(string $uri, string $controller): Router
    {
        return $this->add('PATCH', $uri, $controller);
    }

    /**
     * Put a resource
     * @param string $uri
     * @param string $controller
     * @return Router
     */
    public function put(string $uri, string $controller): Router
    {
        return $this->add('PUT', $uri, $controller);
    }

    /**
     * Destroy/delete a resource
     * @param string $uri
     * @param string $controller
     * @return Router
     */
    public function delete(string $uri, string $controller): Router
    {
        return $this->add('DELETE', $uri, $controller);
    }

    /**
     * route middleware modifier
     * @param string $key
     * @return Router
     */
    public function only(string $key): Router
    {
        $this->routes[array_key_last($this->routes)]['middleware'] = $key;
        return $this;
    }

    /**
     * previous url
     */
    public function back()
    {
        return $_SERVER['HTTP_REFERER'];
    }

    /**
     * Route the request to appropriate controller
     * @param string $uri
     * @param string $method
     * @return mixed
     * @throws Exception
     */
    public function route(string $uri, string $method): mixed
    {
        foreach ($this->routes as $route) {
            $pattern = $this->routeToRegex($route['uri']);

            // check if the $uri matches the route pattern and the method is correct
            if (preg_match($pattern, $uri, $matches) && $route['method'] === strtoupper($method)) {

                array_shift($matches); // Remove the full match from the matches array

                // apply middleware
                Middleware::resolve($route['middleware']);

                return require basePath('Http/controllers/'.$route['controller']);
            }
        }
        abort();
    }

    /**
     * convert route string to a regex pattern
     * @param string $route
     * @return string
     */
    public function routeToRegex(string $route): string
    {
        return '#^'. preg_replace_callback('/{([a-zA-Z0-9_]+)}/',
            function ($matches) {
                return '(?P<'.$matches[1] . '>[a-zA-Z0-9-_]+)';
            },
                $route
            ). '$#';
    }
}
