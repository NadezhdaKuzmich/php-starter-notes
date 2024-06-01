<?php

// task 1
$str = 'learn-ph@example.com';

echo "<b>Task 1:</b><br>";
// bin2hex - повертає ASCII-рядок, що містить шістнадцяткове 
// представлення аргументу string. Перетворення виконується 
// побайтно, починаючи зі старшого напівбайта:
echo bin2hex($str);
echo "<hr>";

// task 2
$str = 'The brown fox';
$strToInsert = 'quick';
$insertPos = 4;

/*
substr_replace( string, replacement, start, [length] ) -
замінює частину рядка string, що починається з символу 
з порядковим номером start і довжиною length, рядком 
replacement і повертає результат. 
Якщо start - додатне число, заміна починається із символу 
з порядковим номером start. 
Якщо start - від'ємне число, заміна починається із символу 
з порядковим номером start, рахуючи від кінця рядка.
Якщо аргумент length - додатне число, то він визначає довжину 
замінного підрядка. 
Якщо цей аргумент від'ємний, він визначає кількість символів 
від кінця рядка, на якому закінчується заміна. Цей аргумент 
необов'язковий і за замовчуванням дорівнює strlen(string );, 
тобто заміна до кінця рядка string.
Якщо length дорівнює нулю, то це еквівалентно вставці replace 
у string на зазначеній позиції start.
*/
$newStr = substr_replace($str, $strToInsert . ' ', $insertPos, 0);

echo "<b>Task 2:</b><br>";
echo $newStr;
echo "<hr>";

// task 3
$str = ' The quick brown fox ';
$arr = explode(' ', trim($str));

echo "<b>Task 3:</b><br>";
echo $arr[0];
echo "<hr>";

// task 4
$str = '000547023.24';

// ltrim ( str, [charlist] ) - повертає рядок str з видаленими з 
// початку рядка пробілами, якщо другий параметр не передано.
$newStr = ltrim($str, '0');

echo "<b>Task 4:</b><br>";
echo $newStr;
echo "<hr>";

// task 5
$str = 'The quick brown fox jumps over the lazy dog';

echo "<b>Task 5:</b><br>";
echo '<pre>' . str_replace("fox", " ", $str) . '</pre>';
echo "<hr>";

// task 6
$str = 'The quick brown fox jumps over the lazy dog///';

echo "<b>Task 6:</b><br>";
echo rtrim($str, '/');
echo "<hr>";

// task 7
$url = 'http://www.example.com/5478631';

echo "<b>Task 7:</b><br>";
// strrpos - повертає позицію останнього входження підрядка в рядку:
echo substr($url, strrpos($url, '/') + 1);
echo "<hr>";

// task 8
$str = '\"\1+2/3*2:2-3/4*3';

echo "<b>Task 8:</b><br>";
// str_split - розбиває рядок у масив. Першим параметром вона приймає 
// рядок, а другим - кількість символів в елементі масиву:
echo str_replace(str_split('\\/:*?"<>|+-'), ' ', $str);
echo "<hr>";

// task 9
$str = 'The quick brown fox jumps over the lazy dog';

echo "<b>Task 9:</b><br>";
// array_slice - повертає послідовність елементів масиву, визначену 
// параметрами. Вибирає зріз масиву:
echo implode(' ', array_slice(explode(' ', $str), 0, 5));
echo "<hr>";

// task 10
$str = "2,543.12";
$numStr = str_replace(',', '', $str);

echo "<b>Task 10:</b><br>";
// is_numeric - перевіряє, чи є змінна числом або рядком, що містить число:
if (is_numeric($numStr)) {
  echo $numStr;
}
echo "<hr>";

// task 11
echo "<b>Task 11:</b><br>";
for ($i = ord('a'); $i <= ord('z'); $i++) {
  echo chr($i);
}

echo "<hr>";

// task 12
$marks1 = [360, 310, 310, 330, 313, 375, 456, 111, 256];
$marks2 = [350, 340, 356, 330, 321];
$marks3 = [630, 340, 570, 635, 434, 255, 298];

$maxMarks = max(max($marks1), max($marks2), max($marks3));
$minMarks = min(min($marks1), min($marks2), min($marks3));

echo "<b>Task 12:</b><br>";
echo "Maximum marks : $maxMarks <br>";
echo "Minimum marks : $minMarks";