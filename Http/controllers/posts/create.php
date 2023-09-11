<?php

use Core\App;
use Core\Database;

$db = App::resolve(Database::class);


$categories = $db->query('SELECT * FROM categories')->get();
$tags = $db->query('SELECT * FROM tags')->get();

view('posts/create.php', [
    "categories" => $categories,
    "tags" => $tags,
    "errors" => []
]);
