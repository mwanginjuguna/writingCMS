<?php
$admin = new \Core\Admin();

$setupData = $admin->loadInfo()->data;

if ($setupData['sitemapInit']) {
    redirect('/admin');
}

require basePath('Http/controllers/sitemaps/init.php');
