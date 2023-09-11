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
     * @return bool|Exception
     */
    public function many(array $batch): bool|Exception
    {
        try {
            $question = new Question();
            $question->saveMany($this->db, $batch);
        } catch (Exception $exception) {
            return $exception;
        }


        return true;
    }
}
