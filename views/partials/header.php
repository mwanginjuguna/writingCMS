<?php
/**
 * Header html
 *
 * @package incognito writers
 *
 */

// $config = require config();
$defaultExcerpt = 'Get instant and reliable assignment writing help from expert writers at a cheap price. All papers and tasks will be delivered on time with Money-back guarantee.';

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $pageTitle ?? $config['siteTitle'].' - '.$config['siteTagline'];?></title>
    <meta name="description" content="<?php echo $pageExcerpt ?? $config['siteExcerpt'] ?? $defaultExcerpt ?>">
    <meta name="google-site-verification" content="<?php echo $config['googleVerificationCode'] ?>" />
    <link rel="canonical" href="<?= BASE_URL.$_SERVER['REQUEST_URI'] ?>">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Noto+Sans:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="<?php echo assetPath('css/style.css'); ?>?<?php echo date('Y-m-d_H:m:s'); ?>">
</head>
<body>
<div class="main">
    <!-- header -->
    <header class="header">
        <!-- banner -->
        <section class="banner"></section>

        <!-- navbar -->
        <nav class="navbar">
            <!-- logo -->
            <a href="" class="top-logo">
                <img alt="Logo" src="<?php echo assetPath('images/incognito.svg'); ?>" style="width: 2rem;">
                <p class="site-title"><?= $config['siteTitle'] ?></p>
            </a>
            <div class="main-menu">
                <p class="<?= urlIs('/') ? 'active' : 'default' ?>"><a href="/">Home</a></p>
                <p class="<?= urlIs('/about-us') ? 'active' : 'default' ?>"><a href="/about-us">About Us</a></p>
                <p class="<?= urlIs('/faq') ? 'active' : 'default' ?>"><a href="/faq">FAQ</a></p>
                <p class="<?= urlIs('/blog') ? 'active' : 'default' ?>"><a href="/blog">Blog</a></p>
                <p class="<?= urlIs('/questions/new') ? 'active' : 'default' ?>"><a href="/questions/new">New Question</a></p>
            </div>

            <div class="cta-btns">
                <button class="btn secondary-btn">
                    <a href="<?php echo $config['loginLink'] ?>">
                        Login
                    </a>
                </button>
                <button class="btn primary-btn">
                    <a href="<?php echo $config['orderLink'] ?>">
                        Order Now
                    </a>
                </button>

                <div class="hamburger">
                    <!-- Hamburger icon to show the menu -->
                    <button id="show-menu">
                        <svg width="24px" height="24px" viewBox="0 -3 30 30" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" fill="#000000"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"> <!-- Uploaded to: SVG Repo, www.svgrepo.com, Generator: SVG Repo Mixer Tools --> <title>menu</title> <desc>Created with Sketch.</desc> <defs> </defs> <g id="Vivid.JS" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd"> <g id="Vivid-Icons" transform="translate(-436.000000, -571.000000)"> <g id="Icons" transform="translate(37.000000, 169.000000)"> <g id="menu" transform="translate(390.000000, 390.000000)"> <g transform="translate(9.000000, 12.000000)" id="Shape"> <path d="M0,0 L30,0 L30,4 L0,4 L0,0 Z M0,10 L30,10 L30,14 L0,14 L0,10 Z M0,20 L30,20 L30,24 L0,24 L0,20 Z" fill="#FF410D"> </path> <path d="M0,0 L4,0 L4,4 L0,4 L0,0 Z M0,10 L4,10 L4,14 L0,14 L0,10 Z M0,20 L4,20 L4,24 L0,24 L0,20 Z M26,0 L30,0 L30,4 L26,4 L26,0 Z M26,10 L30,10 L30,14 L26,14 L26,10 Z M26,20 L30,20 L30,24 L26,24 L26,20 Z" fill="#0C0058"> </path> </g> </g> </g> </g> </g> </g></svg>
                    </button>

                    <!-- Hamburger icon to hide the menu -->
                    <button id="hide-menu">
                        <svg width="24px" height="24px" viewBox="0 0 21 21" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" fill="#000000"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"> <!-- Uploaded to: SVG Repo, www.svgrepo.com, Generator: SVG Repo Mixer Tools --> <title>close</title> <desc>Created with Sketch.</desc> <defs> </defs> <g id="Vivid.JS" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd"> <g id="Vivid-Icons" transform="translate(-675.000000, -729.000000)"> <g id="Icons" transform="translate(37.000000, 169.000000)"> <g id="close" transform="translate(624.000000, 546.000000)"> <g transform="translate(14.000000, 14.000000)" id="Shape"> <polygon fill="#FF410D" points="21 18 18 21 10.5 13.5 3 21 0 18 7.5 10.5 0 3 3 0 10.5 7.5 18 0 21 3 13.5 10.5"> </polygon> <path d="M6,18 L3,21 L0,18 L3,15 L6,18 Z M21,3 L18,6 L15,3 L18,0 L21,3 Z M15,18 L18,21 L21,18 L18,15 L15,18 Z M0,3 L3,6 L6,3 L3,0 L0,3 Z" fill="#0C0058"> </path> </g> </g> </g> </g> </g> </g>
                        </svg>
                    </button>
                </div>
            </div>
        </nav>
    </header>
    <!-- dropdown menu -->
    <div id="dropdown-menu">
        <p class="<?= urlIs('/') ? 'active' : 'default' ?>"><a href="/">Home</a></p>
        <p class="<?= urlIs('/about-us') ? 'active' : 'default' ?>"><a href="/about-us">About Us</a></p>
        <p class="<?= urlIs('/faq') ? 'active' : 'default' ?>"><a href="/faq">FAQ</a></p>
        <p class="<?= urlIs('/services') ? 'active' : 'default' ?>"><a href="/services">Our Services</a></p>
        <p class="<?= urlIs('/blog') ? 'active' : 'default' ?>"><a href="/blog">Blog</a></p>
    </div>
