<?php

// task 1
$str1 = 'The quick brown fox jumps over the lazy dog.';

echo "<b>Task 1:</b><br>";
// strpos - повертає позицію першого входження підрядка в інший рядок.
// strpos(string $haystack, string $needle, int $offset = 0): int|false
if (strpos($str1, 'jumps') !== false) {
  echo 'The specific word is present.';
} else {
  echo 'The specific word is not present.';
}
echo "<hr>";

// task 2
$x = 20;

// (string) - converts the integer $x to a string:
$str = (string) $x; 

echo "<b>Task 2:</b><br>";
if ($x === $str) {
  echo "They are the same.";
} else {
  echo "They are not same.";
}
echo "<hr>";