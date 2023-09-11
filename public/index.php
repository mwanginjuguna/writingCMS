<?php
const BASE_PATH = __DIR__.'/../';

session_start();

require BASE_PATH.'vendor/autoload.php';

require BASE_PATH . 'core/functions.php';

// define base url
$protocol = isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on' ? 'https://' : 'http://';
$domain = $_SERVER['HTTP_HOST'];
$baseUrl = $protocol.$domain;
define('BASE_URL', $baseUrl);

$config = require basePath('config.php');
require basePath('bootstrap.php');

$router = new Core\Router();
$routes = require basePath('routes.php');

$uri = parse_url($_SERVER['REQUEST_URI'])['path'];
$method = $_SERVER['_method'] ?? $_SERVER['REQUEST_METHOD'];
// $queryString = parse_url($_SERVER['REQUEST_URI'])['query'] ?? '';

$app = new \Core\App();
(new \Core\Session)->save($app->resolve(\Core\Database::class));

try {
    $router->route($uri, $method);
} catch (\Core\ValidationException $e) {
    \Core\Session::flash('errors', $e->getErrors());

    \Core\Session::flash('old', [
        'email' => $e->getOld()['email']
    ]);

    redirect($router->back());
}

\Core\Session::unflash();
