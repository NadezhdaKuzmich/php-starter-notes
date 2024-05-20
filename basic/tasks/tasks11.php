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

// task 7
$str = 'abcde$ddfd @abcd )der]';

echo "<b>Task 7:</b><br>";
echo 'Old string : ' . $str . '<br>';
$newstr = preg_replace("/[^A-Za-z0-9 ]/", '_', $str);
echo 'New string : ' . $newstr;
echo "<hr>";

// task 8
echo "<b>Task 8:</b><br>";
// date - конвертує timestamp у читабельний формат:
echo "© " . date('Y') . ' PHP Exercises';
echo "<hr>";

// task 9
// mktime - повертає тимчасову мітку Unix відповідно 
// до переданих аргументів або false , якщо тимчасову 
// мітку не можна представити у вигляді цілого числа: 
$targetDays = mktime(0, 0, 0, 07, 05, 2024);
// time - повертає поточний час у форматі Unix timestamp:
$today = time();

$diffDays = $targetDays - $today;
// 86400 сек = 24 години
$days = (int) ($diffDays / 86400);

echo "<b>Task 9:</b><br>";
print "Days till next birthday: $days days!";
echo "<hr>";

// task 10
echo "<b>Task 10:</b><br>";
echo date("Y/m/d") . "<br>";
echo date("y.m.d") . "<br>";
echo date("d-m-y") . "<hr>";

// task 11
$startDate = "2022-02-24";
$endDate = time();

// - abs - повертає абсолютну величину (модуль числа).
// - strtotime - перетворює довільну дату у формат timestamp. 
// Формат timestamp - це кількість секунд, що минула з 1-го 
// січня 1970 року по заданий момент часу:
$dateDiff = abs($endDate - strtotime($startDate));

$years = floor($dateDiff / (365 * 24 * 60 * 60));
$months = floor(($dateDiff - $years * 365 * 24 * 60 * 60) / (30 * 24 * 60 * 60));
$days = floor(($dateDiff - $years * 365 * 24 * 60 * 60 - $months * 30 * 24 * 60 * 60) / (24 * 60 * 60));

echo "<b>Task 11:</b><br>";
echo "$years years, $months months, $days days";
echo "<hr>";