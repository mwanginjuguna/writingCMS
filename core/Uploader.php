<?php

namespace Core;

use Exception;

class Uploader
{
    public int $processedRows;

    public function __construct(protected Database $db)
    {
    }

    /**
     * read questions from csv files
     *
     * @param $file
     * @return void
     */
    public function read($file): void
    {
        fgetcsv($file);

        // loop through the csv file and process 20 rows
        $batchSize = 20;
        $rowNum = 0;
        $batch = [];

        while (($data = fgetcsv($file)) !== false) {
            $batch[] = $data;
            $rowNum++;
            if ($rowNum % $batchSize === 0) {
                // Process the current batch of 20 rows
                $this->processBatch($batch);

                // reset batch
                $batch = [];
            }
        }

        $this->processedRows = $rowNum;

        // Process the last batch, which may be less than 20 rows
        if (!empty($batch)) {
            $this->processBatch($batch);
        }
    }

    /**
     * process batch for saving
     * @param array $batch
     * @return void
     */
    public function processBatch(array $batch): void
    {
        foreach ($batch as $row) {
            $title = trim($row[0]);
            $body = trim($row[1]);
            $category = trim($row[2]);
            $tag = trim($row[3]);

            $this->saveQuestion($title, $body, $category, $tag);
        }
    }

    /**
     * save question
     * @param string $title
     * @param string $body
     * @param string $category
     * @param string $tag
     * @return void
     */
    public function saveQuestion(string $title, string $body, string $category, string $tag): void
    {
        $question = new Question($title, $body, $category, $tag);
        $question->save($this->db);
    }

    /**
     * Upload multiple questions in a batch
     * @param array $batch
     * @return array|Exception
     */
    public function many(array $batch): array|Exception
    {
        $failed = [
            'status' => false,
            "success" => null,
            "failed" => "Database"
        ];

        try {
            $question = new Question();
            $result = $question->saveMany($this->db, $batch);
        } catch (Exception $exception) {
            $failed['exception'] = $exception;
            return $failed;
        }

        if ($result['status'] === 0) {
            $failed['exception'] = $result['message'];
            return $failed;
        }

        if ($result['failed'] == 'Sitemap') {
            return [
                'status' => true,
                "success" => 'Database only',
                "failed" => "Sitemap"
            ];
        }
        return [
            'status' => true,
            "success" => 'Both',
            "failed" => null
        ];
    }
}
