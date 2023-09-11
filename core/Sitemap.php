<?php

namespace Core;

use SimpleXMLElement;

class Sitemap
{
    public SimpleXMLElement $xml;
    public string $sitemapDir;
    public array $sitemaps = [];

    public function __construct()
    {
        $this->xml = new SimpleXMLElement('<?xml version="1.0" encoding="UTF-8"?><urlset xmlns="http://www.sitemaps.org/schemas/sitemap/0.9"></urlset>');

        $this->sitemapDir = basePath('public/sitemaps/');
    }

    /**
     * Generate xml
     * @param array $urls
     * @return bool|string
     */
    public function generateSitemapXml(array $urls): bool|string
    {
        foreach ($urls as $url) {
            $urlElement = $this->xml->addChild('url');
            $urlElement->addChild('loc', $url['loc']);
            $urlElement->addChild('lastmod', $url['lastmod']); // last modified
            $urlElement->addChild('changefreq', $url['changefreq']); // change frequency
            $urlElement->addChild('priority', $url['priority']); // priority
        }

        return $this->xml->asXML();
    }

    /**
     * Generating sitemapindex.xml
     * @param array $sitemaps
     * @return bool|string
     */
    public function generateIndexSitemapXML(array $sitemaps = []): bool|string
    {
        $this->xml = new SimpleXMLElement('<?xml version="1.0" encoding="UTF-8"?><sitemapindex xmlns="http://www.sitemaps.org/schemas/sitemap/0.9"></sitemapindex>');

        foreach ($sitemaps as $sitemap) {
            $sitemapElement = $this->xml->addChild('sitemap');
            $sitemapElement->addChild('loc', $sitemap['loc']);
            $sitemapElement->addChild('lastmod', $sitemap['lastmod']);
        }
        
        return $this->xml->asXML();
    }

    /**
     * Adding a sitemap to sitemapindex.xml
     * @param array $sitemap
     * @return bool|int
     */
    public function addToIndexSitemap(array $sitemap): bool|int
    {
        $this->xml = $this->loadSitemap('sitemap.xml');
        $element = $this->xml->addChild('sitemap');
        $element->addChild('loc', $sitemap['loc']);
        $element->addChild('lastmod', $sitemap['lastmod']);

        return $this->saveSitemapToFile($this->xml->asXML(), 'sitemap.xml');
    }

    /**
     * Adding url child to a sitemap
     * @param array $sitemaps
     * @param SimpleXMLElement $xmlContent
     * @param string $path
     * @return bool|int
     */
    public function addToSitemap(array $sitemaps, SimpleXMLElement $xmlContent, string $path): bool|int
    {
        foreach ($sitemaps as $sitemap) {
            $element = $xmlContent->addChild('url');
            $element->addChild('loc', $sitemap['loc']);
            $element->addChild('lastmod', $sitemap['lastmod']);
            $element->addChild('changefreq', $sitemap['changefreq']); // change frequency
            $element->addChild('priority', $sitemap['priority']); // priority
        }


        return $this->saveSitemapToFile($xmlContent, $path);
    }

    /**
     * save XML content to file
     * @param $xmlContent
     * @param string $filename
     * @return int|false
     */
    public function saveSitemapToFile($xmlContent, string $filename): bool|int
    {
        return file_put_contents($this->sitemapDir.basename($filename), $xmlContent);
    }

    /**
     * Load a specific sitemap by passing the name of the sitemap to load.
     * @param string $path - Is the name with extension of the sitemap to load e.g. sitemap.xml
     * @return SimpleXMLElement|bool - SimpleXMLElement or false if no sitemap is found
     */
    public function loadSitemap(string $path): SimpleXMLElement|bool
    {
        return simplexml_load_file($this->sitemapDir.basename($path));
    }

    /**
     * output sitemaps to browser
     * @param array $data
     * @return bool|string
     */
    public function toBrowser(array $data): bool|string
    {
        // header('Content-Type: text/xml');
        return $this->generateSitemapXml($data);
    }

    /**
     * Generate posts sitemaps (posts_sitemap.xml).
     * Each post_sitemap.xml can only have a max of 2000 urls; otherwise,
     * a new posts_sitemap{$index}.xml is created. Where $index is an int type.
     * @param array $posts - Array of arrays.
     * @return bool|int
     */
    public function generateOrUpdatePostsSitemap(array $posts): bool|int
    {
        $postsCount = count($posts);

        // look-up the posts_sitemap.xml file with the latest/largest index
        // e.g. posts_sitemap3.xml could be the latest sitemap file
        // check if the latest sitemap has the max urls

        $postSitemapPaths = glob($this->sitemapDir.'posts_sitemap*.xml');
        $lastPath = end($postSitemapPaths) ?? $this->sitemapDir.'posts_sitemap.xml';

        // Use regular expression to extract the value between "post_sitemap" and ".xml"
        if (preg_match('/posts_sitemap(\d+)\.xml/', basename($lastPath), $matches)) {
            $index = $matches[1];
        } else {
            $index = 1;
        }
        $sitemapPath = $lastPath;

        $sitemapCount = $this->sitemapItemsCount($sitemapPath);

        while ($sitemapCount === 2000 || $sitemapCount + $postsCount > 2000) {
            $sitemapPath = $this->sitemapDir."posts_sitemap{$index}.xml";
            $index++;

        }

        // if new file created, add it to the sitemapindex.xml and save the posts
        if (!$this->sitemapExists($sitemapPath)) {
            $this->addToIndexSitemap([
                "loc" => BASE_URL.basename($sitemapPath),
                "lastmod" => date('Y-m-d')
            ]);

            $xmlContent = $this->generateSitemapXml($posts);

            return $this->saveSitemapToFile($xmlContent, basename($sitemapPath));
        }

        $xmlContent = $this->loadSitemap(basename($sitemapPath));

        // save posts sitemap data to the path
        return $this->addToSitemap($posts, $xmlContent, basename($sitemapPath));
    }

    /**
     * Check if a sitemap exists
     * @param string $path
     * @return bool
     */
    public function sitemapExists(string $path): bool
    {
        return file_exists($this->sitemapDir.basename($path));
    }

    /**
     * Save page urls into page_sitemap.xml
     * @param array $pages
     * @return void
     */
    public function savePagesToXml(array $pages): void
    {
        $pageXML = $this->generateSitemapXml($pages);
        $this->saveSitemapToFile($pageXML, 'page_sitemap.xml');
    }

    /**
     * Check number of items in a sitemap
     * @param string $path
     * @return int
     */
    public function sitemapItemsCount(string $path): int
    {
        $xmlData = $this->loadSitemap(basename($path));
        return $xmlData->count();
    }

    /**
     * Load urls for the existing pages
     * @param SimpleXMLElement $pageSitemaps
     * @return array
     */
    public function loadExistingPageUrls(SimpleXMLElement $pageSitemaps): array
    {
        $existingPageUrls = [];

        foreach ($pageSitemaps->url as $element) {
            $existingPageUrls[] = (string) $element->loc;
        }

        return $existingPageUrls;
    }

    /**
     * Display all sitemap files inside the sitemaps directory,
     * by default this is `public/sitemaps/` or sitemapDir in the Sitemap::class
     * @return array
     */
    public function sitemaps(): array
    {
        foreach (glob($this->sitemapDir . '*.xml', GLOB_NOSORT) as $sitemapPath) {
            $this->sitemaps[] = [
                'loc' => basename($sitemapPath)
            ];
        }
        return $this->sitemaps;
    }
}
