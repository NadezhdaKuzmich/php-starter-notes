<?php

// task 1
echo "<b>Task 1:</b><br>";
$replace1 = substr_replace("Hello JavaScript", "PHP", 6);
echo "$replace1 <br>";

$replace2 = substr_replace("Hello JavaScript", "PHP", -10);
echo "$replace2 <hr>";

// task 2
echo "<b>Task 2:</b><br>";
$replace = substr_replace("PHP!", "Hello ", 0, 0);
echo "$replace1 <hr>";

// task 3
echo "<b>Task 3:</b><br>";
echo strcoll("Hello php", "hello") . " because the first string is less than the second string.<br>";
echo strcoll("hello", "Hello") . " because the first string is greater than the second string.<hr>";