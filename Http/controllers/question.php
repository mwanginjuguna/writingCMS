<?php

use Core\Question;

$question = new Question();

view('partials/header.php');
view('question-post.php', ["question" => $question]);
view('partials/footer.php');
