<?php
/**
 * Landing page for incognitowriters.com
 */

use Core\App;
use Core\Database;

$db = App::resolve(Database::class);

$perPage = 30;

$currentPage = isset($_GET['page']) ? (int)$_GET['page'] : 2;

$offset = ($currentPage - 1) * $perPage;

$query = "select questions.* from questions order by created_at desc limit {$perPage} offset {$offset}";

$questions = $db->query($query)
    ->get();

$total_rows = $db->query("SELECT COUNT(*) as count FROM questions")->find()['count'];
$total_pages = ceil($total_rows / $perPage);

view('posts/index.php', [
    "questions" => $questions,
    "pages" => $total_pages
]);

