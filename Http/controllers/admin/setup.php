<?php

use Core\Admin;

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $setupDetails = [
        "siteTitle" => $_POST["site-title"],
        "siteTagline" => $_POST["site-tagline"],
        "siteExcerpt" => $_POST["site-excerpt"],
        "siteEmail" => $_POST["site-email"],
        // "siteLogo" => $_FILES["site-logo"] ?? '',
        "orderLink" => $_POST["order-link"],
        "loginLink" => $_POST["login-link"],
        "adminSetup" => true
    ];

    // validate admin setup
    $admin = new Admin();
    if ($admin->validate($setupDetails)) {
        // save setup details to json
        $admin->setup($setupDetails);

        require 'Http/controllers/sitemaps/init.php';
    }
    $errors = $admin->errors();
}

view('admin/setup.php', [
    "errors" => empty($errors) ? [] : $errors
]);
