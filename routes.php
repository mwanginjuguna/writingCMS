<?php

$router->get('/', 'landing-page.php');
$router->get('/about-us', 'about-us.php');
$router->get('/faq', 'faq.php');
$router->get('/services', 'services.php');
$router->get('/blog', 'blog.php'); // all posts/questions

$router->get('/questions/new', 'questionCreate.php')->only('auth');


$router->post('/questions', 'questionsUpload.php')->only('auth');
$router->post('/questions/process', 'questions/process.php')->only('auth');

$router->get('/posts/{post}', 'posts/show.php');
$router->get('/posts/create', 'posts/create.php');
$router->post('/posts', 'posts/store.php');

// sitemaps
$router->get('/sitemap', 'sitemaps/index.php');
$router->post('/api/sitemaps-initialize', 'sitemaps/init.php');

// auth
$router->get('/register', 'auth/registration/register.php')->only('guest');
$router->post('/register', 'auth/registration/store.php')->only('guest');

$router->get('/login', 'auth/session/create.php')->only('guest');
$router->post('/session', 'auth/session/store.php')->only('guest');
$router->post('/logout', 'auth/session/destroy.php')->only('auth');

//admin
$router->get('/admin-setup', 'admin/setup.php')->only('auth');
$router->post('/admin-setup', 'admin/setup.php')->only('auth');
$router->get('/admin', 'admin/index.php')->only('auth');
$router->get('/admin/sitemap-init', 'admin/sitemap-init.php')->only('auth');

// api routes
$router->post('/api/questions', 'api/index.php');
$router->post('/api/json-ep', 'api/index.php');
