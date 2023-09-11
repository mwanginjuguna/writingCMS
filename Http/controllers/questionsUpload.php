<?php

use Core\App;
use Core\AppLog;
use Core\Database;

$db = App::resolve(Database::class);

$fileName = $_FILES['csv_file']['name'];
$fileType = $_FILES['csv_file']['type'];
$fileSize = $_FILES['csv_file']['size'];
$fileTempPath = $_FILES['csv_file']['tmp_name'];
$fileError = $_FILES['csv_file']['error'];

$errors = [];
$uploadOk = 1;

$uploadDir = 'storage/uploads/';
$csv_file = $uploadDir.basename($fileName);

// check if file is csv
if (pathinfo($csv_file, PATHINFO_EXTENSION) !== 'csv') {
    $errors['filetypeError'] = "The file must have a .csv extension! Check and Try Again";
    $uploadOk = 0;
} elseif ($fileSize > 10000000) {
    $errors['fileSizeError'] = "Error! Sorry, the file is too large. The uploaded file must be less than 10MB";
    $uploadOk = 0;
} elseif (file_exists($csv_file)) {
    $errors['fileExistsError'] = "OOPS! A file with the same name already exists. If you have not previously uploaded a file with the same content, rename the file and try again.";
    $uploadOk = 0;
}

if (!empty($errors) || $uploadOk == 0) {
    AppLog::logInfo("There was an Error in uploading the file.", [
        'file' => $csv_file,
        'errors' => $errors,
    ]);

    view('questionCreate', [
        "errors" => $errors,
        "message" => "Sorry, your file was not uploaded. Check errors and try again!",
        "file" => ''
    ]);
    die();
} else {
    try {
        move_uploaded_file($fileTempPath, basePath($csv_file));
        // save file to db
        $db->query("INSERT INTO question_files (filename, processed) VALUES (:filename, :processed)", [
            ":filename" => $_POST['csv_file'],
            ":processed" => false
        ]);

        AppLog::logInfo("A new file has to be uploaded and ready to be processed into the database.", [
            'filePath' => $csv_file,
        ]);
    } catch (Exception $exception) {
        AppLog::logInfo("An Error occurred while adding new Questions to the database.", [
            'file' => $csv_file,
            'errors' => $errors,
            'exceptionMessage' => $exception->getMessage(),
            'exceptionCode' => $exception->getCode(),
        ]);

        view('questionCreate.php', [
            "errors" => $errors,
            "message" => "There was an error uploading your file.",
            "file" => $csv_file,
        ]);
    }

    view('questionCreate.php', [
        "errors" => [],
        "message" => "File was successfully uploaded.",
        "file" => $csv_file,
    ]);
}
