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
    $categories = $db->query('SELECT * FROM categories')->get();
    $tags = $db->query('SELECT * FROM tags')->get();

    return view('posts/create.php', ["errors" => $errors]);
}

$query = "INSERT INTO questions(title, excerpt, body, category_id, tag_id) VALUES(:title, :excerpt, :body, :category_id, :tag_id)";

$db->query(
    query: $query,
    params: [
        ":title" => $_POST['title'],
        ":excerpt" => $_POST['excerpt'],
        ":body" => $_POST['body'],
        ":category_id" => $_POST['category_id'],
        ":tag_id" => $_POST['tag_id']
    ]
);

header('location: blog');
die();

