<?php

use Core\App;
use Core\AppLog;
use Core\Database;
use Core\Uploader;

$csv_file = $_POST['csv_file'];
$csvFile = basePath($csv_file);

if (! $csvFile) {
    abort();
}

$db = App::resolve(Database::class);

$id = getOrCreateFileID($db, $csv_file);

try {
    $uploader = App::resolve(Uploader::class);

    $successMessage = parseFileAndSaveQuestionsToDb($uploader, $csvFile, $db, $id);


    AppLog::logInfo("{$this->processedRows} new Questions have been added to the database.", [
        'questions' => $this->processedRows,
        'success' => $successMessage
    ]);

    view('questionCreate.php', [
        "message" => $successMessage,
        "errors" => []
    ]);
} catch (Exception $exception) {
    $errors['processing'] = "Server Error! Unable to complete the processing request.";

    AppLog::logInfo("An Error occurred while adding new Questions to the database.", [
        'file' => $csv_file,
        'filePath' => $csvFile,
        'errors' => $errors,
        'exceptionMessage' => $exception->getMessage(),
        'exceptionCode' => $exception->getCode(),
    ]);

    view('questionCreate.php', [
        "errors" => $errors,
        "message" => "A fatal Error occurred while processing the file!",
        "file" => $csv_file
    ]);
}
