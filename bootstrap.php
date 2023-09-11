<?php

use Core\App;
use Core\Assets;
use Core\Container;
use Core\Database;
use Core\Uploader;

$container = new Container();

$container->bind('Core\Database', function (){
    // initialize db
    $config = require basePath('config.php');

    return new Database($config['database']['config'], $config['database']['username'], $config['database']['password']);
});

$container->bind('Core\Assets', function () {
    return new Assets();
});

$container->bind('Core\Uploader', function () {
    return new Uploader(App::resolve(Database::class));
});

App::setContainer($container);

