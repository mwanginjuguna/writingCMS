<?php
$admin = new \Core\Admin();
$configData = $admin->loadInfo()->data;
$db = \Core\App::resolve(\Core\Database::class);

$query = 'SELECT
COUNT(*) AS posts,
COUNT(DISTINCT category) AS categories,
COUNT(DISTINCT tag) AS tags
FROM questions';

$posts = $db->query($query)->find();

$topQuery = "select * from questions order by views desc limit 10";
$topPosts = $db->query($topQuery)->get(0);

//dd($configData);

view('admin/index.php', [
    "postsCount" => $posts['posts'],
    "categoryCount" => $posts['categories'],
    "tagCount" => $posts['tags'],
    "configData" => $configData,
    "topPosts" => $topPosts
]);
