<?php

// task 1
echo "<b>Task 1:</b><br>";
$str = "Hello";
echo "$str <br>";
echo chunk_split($str, 2, ".") . "<br>";
echo chunk_split($str, 1, "...");
echo "<hr>";

// task 2
$str = "PHP is Lovely Language!";
$strArray = count_chars($str, 1);

echo "<b>Task 2:</b><br>";
foreach ($strArray as $key => $value) {
  echo "The character <b>'" . chr($key) . "'</b> was found $value time(s)<br>";
}
echo "<hr>";

// task 4
$str = "Hello, we are here to help you.";

echo "<b>Task 3:</b><pre>";
print_r(explode(" ", $str, 0));
print_r(explode(" ", $str, 4));
print_r(explode(" ", $str, -3));
echo "</pre><hr>";