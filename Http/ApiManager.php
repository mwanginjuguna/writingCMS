<?php

namespace Http;

use Core\Database;
use Core\Uploader;
use JetBrains\PhpStorm\ArrayShape;

class ApiManager
{
    public static int $responseCode = 200;

    // protected array $result = [];

    /**
     * @param Database $db
     * @param Uploader $uploader
     * @param string $csvFile
     * @return array
     */
    public static function parseCSV(Database $db, Uploader $uploader, string $csvFile): array
    {
        try {
            // save file to db
            $id = getOrCreateFileID($db, $csvFile);

            $fileUploadedMessage = "The file has been uploaded successfully. Parsing file contents into questions' database has commenced.";

            // process the csv file that have been uploaded
            $successMessage = parseFileAndSaveQuestionsToDb($uploader, basePath($csvFile), $db, $id);

            $result = [
                'success' => true,
                'messages' => [
                    "uploaded" => $fileUploadedMessage,
                    "processed" => $successMessage
                ],
                'statusCode' => 201,
                'status' => "Created"
            ];

        } catch (\Exception $exception) {
            $result = [
                'error' => true,
                'status' => 'Internal Server Error!',
                'errorCode' => $exception->getCode(),
                'message' => 'An error occurred while processing the file.',
                'exception' => $exception->getMessage()
            ];
            self::$responseCode = 500;
        }

        return $result;
    }

    /**
     * Parse json data
     * @param Uploader $uploader
     * @param array $decodedData
     * @return array
     */
    public static function parseJson(Uploader $uploader, array $decodedData): array
    {
        try {
            $uploader->many($decodedData);
            $result = [
                'success' => true,
                'message' => "The batch has been processed successfully. All questions in the batch have been processed.",
                'statusCode' => 201,
                'length of json' => count($decodedData),
                'status' => "Created"
            ];
        } catch (\Exception $exception) {
            $result = [
                'error' => true,
                "errorCode" => $exception->getCode(),
                "message" => $exception->getMessage(),
                "context" => [
                    'file' => $exception->getFile(),
                    'line' => $exception->getLine(),
                    'trace' => $exception->getTrace()
                ],
                "status" => 'Likely to be a Database Error!'
            ];

            self::$responseCode = 500;
        }

        return $result;
    }
}
