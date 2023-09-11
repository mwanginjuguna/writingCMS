<?php
$env = json_decode(file_get_contents(basePath('storage/config.json')), true);
return [
    'siteTitle' => $env['siteTitle'] ?? 'Writing CMS',
    'siteHomeURI' => $env['siteHomeURI'] ?? '',
    'siteTagline' => $env['siteTagline'] ?? 'Trusted writing solutions by professional writers for customer looking for quality work.',
    'siteExcerpt' => $env['siteExcerpt'] ?? 'Trusted writing solutions by professional writers for customer looking for quality work.',
    'orderLink' => $env['orderLink'],
    'loginLink' => $env['loginLink'],
    'siteEmail' => $env['siteEmail'],
    'sitePhone' => $env['sitePhone'],
    "database" => $env['database'],
];
