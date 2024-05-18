<?php

// task 1
function checkPalindrome($str)
{
  return $str == strrev($str) ? "It's palindrome." : "It isn't palindrome.";
}

echo "<b>Task 1:</b><br>";
echo checkPalindrome('madam') . "<br>";
echo checkPalindrome('hello');
echo "<hr>";

// task 2
$pattern = '/[^\w]fox\s/';

echo "<b>Task 2:</b><br>";
// preg_match - повертає 1, якщо параметр pattern відповідає переданому 
// параметру subject, 0 - якщо ні, або FALSE у разі помилки.
if (preg_match($pattern, 'The quick brown fox jumps over the lazy dog')) {
  echo "'fox' is present..." . "<br>";
} else {
  echo "'fox' is not present..." . "<br>";
}
echo "<hr>";