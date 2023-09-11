<?php
beforeEach(function () {
    $this->router = new \Core\Router();
});

it('has no routes on initialization', function () {
    expect($this->router->routes)->toBeEmpty();
});

it('can add a route given a uri and a method', function () {
    $this->router->get('/', 'landing-page.php');
    $this->router->get('/about', 'about-us.php');
    expect($this->router->routes)->not->toBeEmpty();
});

it('can apply middleware to a route', function () {
    $this->router->post('/posts', 'posts/store.php')->only('auth');
    expect($this->router->routes[0]['middleware'])->toBe('auth');
});

it('can resolve a route successfully', function () {
    expect($this->router->get('/posts', 'posts/store'))->toBeInstanceOf(\Core\Router::class);
});
