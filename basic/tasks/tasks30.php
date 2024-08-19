<?php

// task 1
echo "<b>Task 1:</b><br>";
$str = "Hello";
echo "$str <br>";
echo chunk_split($str, 2, ".") . "<br>";
echo chunk_split($str, 1, "...");
echo "<hr>";