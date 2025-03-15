<?php

// task 1
$letters = ["a", "b", "c", "d", "e"];

echo "<b>Task 1:</b><br><pre>";
var_dump(array_slice($letters, 2, -1));
var_dump(array_slice($letters, 2, -1, true));
echo "</pre><hr>";

// task 2
$arr = ["1" => "a", "2" => "b", "3" => "c"];

echo "<b>Task 2:</b><br>";
print_r(array_rand($arr));
echo "<hr>";