<?php

use Core\Admin;

$admin = new Admin();
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $setupDetails = [
        "siteTitle" => $_POST["site-title"],
        "siteTagline" => $_POST["site-tagline"],
        "siteExcerpt" => $_POST["site-excerpt"],
        "siteEmail" => $_POST["site-email"],
        // "siteLogo" => $_FILES["site-logo"] ?? '',
        "orderLink" => $_POST["order-link"],
        "loginLink" => $_POST["login-link"],
        "googleVerificationCode" => $_POST["googleVerificationCode"],
    ];

    // validate admin setup
    if ($admin->validate($setupDetails)) {
        // save setup details to json
        $admin->setup($setupDetails);
        // initialize sitemaps? - maybe not here
        // require 'Http/controllers/sitemaps/init.php';

        redirect('/admin');
    }
    $errors = $admin->errors();
}

view('admin/setup.php', [
    "errors" => empty($errors) ? [] : $errors,
    "data" => $admin->loadInfo()->data
]);
