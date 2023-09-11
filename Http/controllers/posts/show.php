<?php

use Core\App;
use Core\Database;

$config = require basePath('config.php');

$db = App::resolve(Database::class);

$slug = basename($_SERVER['REQUEST_URI']);

//dd($slug);
// $postId = $_GET['postId']; deprecated - replaced query-strings with slugs

$query = "SELECT * FROM questions WHERE questions.slug = :slug";

$post = $db->query($query, [":slug" => $slug])->findOrFail();

$views = $post['views'] + 1;

$updateQuery = "UPDATE questions SET views = :views WHERE id = :id";
$db->query($updateQuery, [
    ":views" => $views,
    ":id" => $post['id']
]);

$query2 = "SELECT questions.* FROM questions ORDER BY created_at DESC LIMIT 3";

$relatedPosts = $db->query($query2)->get();

view('posts/show.php', [
    "post" => $post,
    "orderLink" => $config['orderLink'],
    "relatedPosts" => $relatedPosts
]);
