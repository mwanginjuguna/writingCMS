<?php

use Core\App;
use Core\Database;

$db = App::resolve(Database::class);

$questionFiles = $db->query("SELECT * FROM question_files")->get();

view('questionCreate.php', [
    "errors" => [],
    "message" => '',
    "file" => '',
    "questionFiles" => $questionFiles
]);
