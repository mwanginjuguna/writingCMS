<?php

$arr = [];

$part = "(part 1)";

$arr2 = [1, 2, 3, 4, 'f', "5gs"];

foreach ($arr2 as $a) {
    $arr[] = $part;
}

dd(implode(', ', $arr));
view('api/playground.php');
