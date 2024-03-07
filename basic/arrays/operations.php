<?php

/*
Операції над масивами
PHP надає багато функцій для роботи з масивами. 
Деякі найчастіше зустрічаються:
 - isset
 - unset
 - count – підрахунок кількості елементів масиву.
 - array_push – додає один або кілька елементів до кінця масиву.
 - in_array – перевіряє, чи є у масиві значення.
 - implode – об'єднує елементи масиву в рядок.
 - array_keys
 - array_values
*/

echo "<pre>";

$week = [
  1 => 'Monday',
  2 => 'Tuesday',
  3 => 'Wednesday',
  4 => 'Thursday',
  5 => 'Friday',
  6 => 'Saturday',
  7 => 'Sunday'
];

// isset:
if (isset($week[1])) {
  echo $week[1];
} else {
  echo "It isn't Monday";
}
echo "<br>";

// unset:
unset($week[2]);
unset($week[3]);
unset($week[7]);

// count:
print_r(count($week));
echo "<br>";

// array_push:
array_push($week, 'new day', 'new day');

// in_array:
var_dump(in_array('Tuesday', $week));

// implode:
print_r(implode(', ', $week));
echo "<br>";

// array_keys:
print_r(array_keys($week));

// array_values:
print_r(array_values($week));

echo "</pre>";

/*
Динамічний розмір масиву
Для того, щоб створити динамічний масив, потрібно просто 
під час присвоєння елемента не вказувати індекс.
*/
$arr[] = 'a';
$arr[] = 'b';
$arr[] = 'c';

print_r($arr);