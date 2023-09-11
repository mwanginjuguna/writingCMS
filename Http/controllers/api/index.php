<?php

use Core\App;
use Core\AppLog;
use Core\Database;
use Core\Uploader;
use Http\ApiManager;

$db = App::resolve(Database::class);
$uploader = App::resolve(Uploader::class);

$jsonData = file_get_contents('php://input');

AppLog::initialize('apiLog', 'storage/logs/api.log');

header('Access-Control-Allow-Origin: *');
header('Access-Control-Allow-Methods: GET, POST, OPTIONS');
header('Access-Control-Allow-Headers: Content-Type');

if (strtoupper($_SERVER['REQUEST_METHOD']) === 'POST') {
    if (isset($_FILES['csv_file']) && $_FILES['csv_file']['error'] === UPLOAD_ERR_OK) {
        // parse csv
        $fileName = $_FILES['csv_file']['name'];
        $fileType = $_FILES['csv_file']['type'];
        $fileSize = $_FILES['csv_file']['size'];
        $fileTempPath = $_FILES['csv_file']['tmp_name'];
        $fileError = $_FILES['csv_file']['error'];

        $errors = [];
        $uploadOk = 1;

        $uploadDir = 'storage/uploads/';
        $csv_file = $uploadDir.basename($fileName);

        if (move_uploaded_file($fileTempPath, basePath($csv_file))) {

            $result = ApiManager::parseCSV($db, $uploader, $csv_file);

            AppLog::logInfo('Api started.', [
                'Received csv file: ' => $csv_file,
            ]);
            // send result to client
            http_response_code(ApiManager::$responseCode);
            header("Content-Type: application/json");
            echo json_encode($result);
        }
    } elseif ($jsonData) {
        // process json
        $decodedData = json_decode($jsonData, true);

        AppLog::logInfo('Api started.', [
            'Received jsonData count: ' => count($decodedData),
        ]);

        if (json_last_error() === JSON_ERROR_NONE && $decodedData !== null) {
            $result = ApiManager::parseJson($uploader, $decodedData);

            AppLog::logInfo($result['message'], [
                'Result: ' => $result,
            ]);

            http_response_code(ApiManager::$responseCode);
        } else {
            $result = [
                'error' => true,
                'message' => 'There was an error parsing json data',
                'status' => 'JSON Parsing Error!'
            ];

            AppLog::logError($result['message'], [
                'Result: ' => $result,
            ]);

            http_response_code(500);
        }
        // send result to client
        header("Content-Type: application/json");
        echo json_encode($result);
    } else {

        AppLog::logError('Bad Request', [
            'message' => 'The server cannot or will not process the request due to invalid request message framing!',
        ]);

        // send result to client
        http_response_code(400);
        header("Content-Type: application/json");
        echo json_encode([
            'error' => true,
            'message' => 'The server cannot or will not process the request due to invalid request message framing!',
            'status' => 'Bad Request!'
        ]);
    }
} else {

    AppLog::logError('Method Not Allowed', [
        'message' => 'The server cannot or will not process the request due to invalid request message framing!',
        'code' => 405
    ]);
    http_response_code(405);
    header("Content-Type: application/json");
    echo json_encode([
        'error' => true,
        'message' => 'The request method is not supported.',
        'status' => 'Method Not Allowed!'
    ]);
}
