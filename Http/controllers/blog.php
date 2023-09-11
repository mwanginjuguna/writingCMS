<?php
/**
 * Landing page for incognitowriters.com
 */

use Core\App;
use Core\Database;

$db = App::resolve(Database::class);

$perPage = 30;

$currentPage = isset($_GET['page']) ? (int)$_GET['page'] : 1;

$offset = ($currentPage - 1) * $perPage;

$query = "select
    questions.*,
    categories.name as category_name,
    tags.name as tag_name
from
    questions
left join categories on questions.category_id = categories.id
left join tags on questions.tag_id = tags.id
order by created_at desc
limit {$perPage} offset {$offset}";

$questions = $db->query($query)
    ->get();

$total_rows = $db->query("SELECT COUNT(*) as count FROM questions")->find()['count'];
$total_pages = ceil($total_rows / $perPage);

view('posts/index.php', [
    "questions" => $questions,
    "pages" => $total_pages
]);
?>
