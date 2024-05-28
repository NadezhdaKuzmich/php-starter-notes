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

// task 3
$path = 'www.example.com/public_html/index.php';

echo "<b>Task 3:</b><br>";
// substr - вирізає і повертає підрядок із рядка. Сам рядок при цьому не змінюється.
// substr(string $string, int $offset, ?int $length = null): string
// strstr і strchr - здійснюють пошук першого входження одного рядка в інший.
// strrchr - знаходить останнє входження (появу) символу в рядку:
$file_name = substr(strrchr($path, "/"), 1);
echo $file_name;
echo "<hr>";

// task 4
$mailid = 'learn-php@example.com';

echo "<b>Task 4:</b><br>";
// strstr - знаходить перше входження підрядка в рядок і повертає частину рядка 
// починаючи з цього місця до кінця рядка. На відміну від strchr шукає входження 
// підрядка з кількох символів, а не входження одного символу.
// Є також функція stristr, яка робить те саме, але без урахування регістру.
// strstr(string $haystack, string $needle, bool $before_needle = false): string|false
// 3-ий параметр (true) - повертає частину рядка до першого входження підрядка.
$user = strstr($mailid, '@', true);
echo $user;
echo "<hr>";

// task 5
$str1 = 'learn-php@example.com';

echo "<b>Task 5:</b><br>";
echo substr($str1, -3);
echo "<hr>";

// task 6
$value1 = 65.45;
$value2 = 104.35;

echo "<b>Task 6:</b><br>";
// printf(«як форматувати», парметр1, параметр2, ...) - виводить результат на екран.
// $result = sprintf(«...», ..., ...) - теж саме, тільки рядок не виводитися, а 
// поміщається в $result.
echo sprintf("%.1f", $value1 + $value2);
echo "<hr>";

// task 7
function generatePassword($amountOfChars)
{
  $data = '1234567890ABCDEFGHIJKLMNOPQRSTUVWXYZabcefghijklmnopqrstuvwxyz';

  // str_shuffle - перемішує символи в рядку. Вибирається одна можлива 
  // перестановка з усіх можливих:
  return substr(str_shuffle($data), 0, $amountOfChars);
}

echo "<b>Task 7:</b><br>";
echo generatePassword(8);
echo "<hr>";

// task 8
$str = 'the quick brown fox jumps over the lazy dog.';

echo "<b>Task 8:</b><br>";
// preg_replace - виконує пошук і заміну за регулярним виразом.
// preg_replace (pattern, replacement, str [, int limit])
// limit - максимальна кількість замін кожного шаблону для 
// кожного рядка str. Значення за замовчуванням дорівнює -1 
// - не обмежувати кількість замін.
echo preg_replace('/the/', 'That', $str, 1);
echo "<hr>";

// task 9
$str1 = 'football';
$str2 = 'footboll';

// strspn - повертає довжину початкового сегмента рядка string, 
// який містить тільки символи зі значення characters:
// $strPos = strspn($str1 ^ $str2, "\0");
$strPos = strspn($str1, $str2);

echo "<b>Task 9:</b><br>";
printf(
  'First difference between two strings at position %d: "%s" vs "%s"',
  $strPos,
  $str1[$strPos],
  $str2[$strPos]
);
echo "<hr>";

// task 10
$str = "Twinkle, twinkle, little star,\nHow I wonder what you are.\nUp above the world so high,\nLike a diamond in the sky.";

echo "<b>Task 10:</b><br>";
$arr = explode("\n", $str);
echo "<pre>";
print_r($arr);
echo "</pre><hr>";