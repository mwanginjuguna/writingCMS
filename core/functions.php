<?php

use Core\Database;
use Core\Uploader;
use JetBrains\PhpStorm\NoReturn;
use Core\Response;

#[NoReturn] function dd($value): void
{
    echo '<pre>';
    var_dump($value);
    echo '</pre>';

    die();
}

function urlIs($value): bool
{
    return $_SERVER['REQUEST_URI'] === $value;
}

#[NoReturn] function abort($code = 404): void
{
    http_response_code($code);

    if (file_exists(basePath("Http/controllers/$code.php"))){
        require basePath("Http/controllers/$code.php");
    } else {
        require basePath("Http/controllers/404.php");
    }

    die();
}

function authorize($condition, $status = Response::FORBIDDEN): void
{
    if (!$condition)
    {
        abort($status);
    }
}

/**
 * call base_path of any path anywhere in app.
 * @param string $path
 * @return string
 */
function basePath(string $path): string
{
    return BASE_PATH.$path;
}

/**
 * load views
 *
 * @param string $path
 * @param array $attributes
 * @return void
 */
function view(string $path, array $attributes = []): void
{
    extract($attributes);

    $config = require config();

    require basePath('views/'.$path);
}

/**
 * Assets path
 *
 * @param string
 * @return string
 */
function assetPath($path): string
{
    return BASE_URL.'/assets/'.$path;
}

/**
 * Public path
 *
 * @param string
 * @return string
 */
function publicPath($path): string
{
    return '/public/'.$path;
}

function config(): string
{
    return basePath('config.php');
}

/**
 * @param Database $db
 * @param string $csv_file
 * @return mixed
 */
function getOrCreateFileID(Database $db, string $csv_file): mixed
{
    //check if file already exists in db
    $fileInDb = $db->query("select * from question_files where filename = :filename", [":filename" => $csv_file])->find();

    if (!$fileInDb) {
        // save the file to the question_files and get its id
        $db->query("INSERT INTO question_files (filename, processed) VALUES (:filename, :processed)", [
            ":filename" => $csv_file,
            ":processed" => false
        ]);
        $id = $db->connection->lastInsertId();
    } else {
        $id = $fileInDb['id'];
    }
    return $id;
}


/**
 * @param Uploader $uploader
 * @param string $csvFile
 * @param Database $db
 * @param int $id
 * @return string
 */
function parseFileAndSaveQuestionsToDb(Uploader $uploader, string $csvFile, Database $db, int $id): string
{
// parse file and save questions to db
    $file = fopen($csvFile, 'r');

    $uploader->read($file);

    fclose($file);

    // update db and mark the file processed
    $db->query("UPDATE question_files SET processed=:processed WHERE id=:id", [
        ":processed" => true,
        ":id" => $id
    ]);

    return "File " . basename($csvFile) . " has been processed successfully. {$uploader->processedRows} new questions have been added to the database.";
}

/**
 * redirect to given path
 * @param string $path
 */
#[NoReturn] function redirect(string $path): void
{
    header("location: {$path}");
    exit();
}
