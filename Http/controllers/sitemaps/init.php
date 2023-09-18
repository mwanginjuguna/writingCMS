<?php

$pages = [
    "home" => [
        "loc" => BASE_URL,
        "lastmod" => date('Y-m-d'),
        "changefreq" => 'yearly',
        "priority" => 10
    ],
    "about" => [
        "loc" => BASE_URL . "/about-us",
        "lastmod" => date('Y-m-d'),
        "changefreq" => 'yearly',
        "priority" => 10
    ],
    "blog" => [
        "loc" => BASE_URL . "/blog",
        "lastmod" => date('Y-m-d'),
        "changefreq" => 'daily',
        "priority" => 10
    ],
    "faq" => [
        "loc" => BASE_URL . "/faq",
        "lastmod" => date('Y-m-d'),
        "changefreq" => 'daily',
        "priority" => 10
    ],
    "services" => [
        "loc" => BASE_URL . "/services",
        "lastmod" => date('Y-m-d'),
        "changefreq" => 'daily',
        "priority" => 10
    ],
];

$sitemap = new \Core\Sitemap();
$sitemapDir = basePath('public/sitemaps/');

$pageSitemaps = $sitemap->loadSitemap('page_sitemap.xml');

// check if all pages are registered in the sitemap
if (!empty($pageSitemaps)) {
    $existingPageUrls = $sitemap->loadExistingPageUrls($pageSitemaps);

    $newPages = [];
    foreach ($pages as $pageKey => $page) {
        if (!in_array($page['loc'], $existingPageUrls)) {
            $newPages[] = $page;
        }
    }
    if (!empty($newPages)) {
        $sitemap->addToSitemap($newPages, $pageSitemaps, 'page_sitemap.xml');
    }
} else {
    $sitemap->savePagesToXml($pages);
}

$sitemaps = $sitemap->sitemaps();

if (isset($admin) || $_SERVER['REQUEST_METHOD'] === 'GET') {
    redirect('/admin');
} else {
    http_response_code(200);
    header('Content-Type: application/json');
    echo json_encode($sitemaps);
}
