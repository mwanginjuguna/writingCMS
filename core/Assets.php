<?php

namespace Core;

class Assets
{
    // asset variables - used for ordering page and calculating price as necessary
    public array $currencies; // supported currencies
    public array $lineSpacing; // supported line spacings
    public array $rates; // pricing policy
    public array $levels; // nature of task or academic level
    public array $services; // services offered
    public array $subjects; // subjects and disciplines
    public array $writerCategories; // available categorization of writers
    public array $referencingStyles; // supported referencing or citation styles

    public function __construct()
    {
        $this->currencies = $this->getDataFromJsonFilesAssets('currencies');
        $this->lineSpacing = $this->getDataFromJsonFilesAssets('line-spacings');
        $this->referencingStyles = $this->getDataFromJsonFilesAssets('referencing-styles');
        $this->services = $this->getDataFromJsonFilesAssets('service-types');
        $this->subjects = $this->getDataFromJsonFilesAssets('subjects');
        $this->levels = $this->getDataFromJsonFilesAssets('task-levels');
        $this->writerCategories = $this->getDataFromJsonFilesAssets('writer-categories');
        $this->rates = $this->getDataFromJsonFilesAssets('pricing');

    }

    /**
     * Load json data
     * @param string $filename
     * @return array
     */
    public function getDataFromJsonFilesAssets(string $filename): array
    {
        // Set the file path
        $filePath = basePath("public/assets/json_files/{$filename}.json");

        // Read the JSON file
        $jsonData = file_get_contents($filePath);

        // Return an array of the parsed data
        return json_decode($jsonData, true);
    }
}
