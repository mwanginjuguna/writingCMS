<?php

use Core\App;
use Core\Database;
use Core\Response;
use Core\Validator;

$db = App::resolve(Database::class);

$errors = [];

if (!Validator::string($_POST['title'])) {
    $errors['title'] = "Title is Required";
} elseif (!Validator::string($_POST['body'])) {
    $errors['body'] = "Body is Required";
}

if (!empty($errors)) {
    return view('posts/create.php', ["errors" => $errors]);
}

$query = "INSERT INTO questions(title, excerpt, body, category, tag) VALUES(:title, :excerpt, :body, :category, :tag)";

$db->query(
    query: $query,
    params: [
        ":title" => $_POST['title'],
        ":excerpt" => $_POST['excerpt'],
        ":body" => $_POST['body'],
        ":category" => $_POST['category'],
        ":tag" => $_POST['tag']
    ]
);

header('location: blog');
die();

