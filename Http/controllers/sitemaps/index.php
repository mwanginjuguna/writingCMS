<?php
$sitemapList = [];
$sitemapsDir = basePath('public/sitemaps/');

$sitemap = new \Core\Sitemap();

foreach (glob($sitemapsDir.'*.xml', GLOB_NOSORT) as $sitemapFile) {
    $sitemapList[] = [
        "loc" => basename($sitemapFile)
    ];
}

view('sitemaps.php', [
    "sitemaps" => $sitemapList
]);
