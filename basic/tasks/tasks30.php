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

echo "<b>Task 1:</b><br>";
foreach ($strArray as $key => $value) {
  echo "The character <b>'" . chr($key) . "'</b> was found $value time(s)<br>";
}
echo "<hr>";