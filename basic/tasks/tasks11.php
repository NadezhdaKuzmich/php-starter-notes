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
// параметру subject, 0 - якщо ні, або FALSE у разі помилки:
if (preg_match($pattern, 'The quick brown fox jumps over the lazy dog')) {
  echo "'fox' is present...";
} else {
  echo "'fox' is not present...";
}
echo "<hr>";

// task 3
$str1 = 'The quick " " 	 brown fox';

echo "<b>Task 3:</b><br>";
// preg_replace - виконує пошук і заміну за регулярним виразом:
echo preg_replace('/\s+/', '', $str1);
echo "<hr>";

// task 4
$str1 = "$12,334.00A";

echo "<b>Task 4:</b><br>";
echo preg_replace("/[^0-9,.]/", "", $str1);
echo "<hr>";

// task 5
$str = "Twinkle, twinkle, little star,\nHow I wonder what you are.\nUp above the world so high,\nLike a diamond in the sky.";

echo "<b>Task 5:</b><br> <pre>";
echo $str . "<br>";
echo "<br>" . preg_replace('/\s+/', ' ', $str);
echo "</pre> <hr>";

// task 6
$str = 'The quick brown [fox].';

echo "<b>Task 6:</b><br>";
preg_match('#\[(.*?)\]#', $str, $match);
print $match[1];
echo "<hr>";