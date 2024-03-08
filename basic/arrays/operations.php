<?php

/*
Операції над масивами
PHP надає багато функцій для роботи з масивами. 
Деякі найчастіше зустрічаються:
 - isset
 - unset

 - count – підрахунок кількості елементів масиву.
 - in_array – перевіряє, чи є у масиві значення.
 - implode – об'єднує елементи масиву в рядок.
 - array_keys
 - array_values

 - array_push – додає один або кілька елементів до кінця масиву.
 - is_array - визначає, чи є змінна масивом чи ні.
 - array_fill - заповнює масив значеннями.
 - array_filter - фільтрує елементи масиву за допомогою 
 callback-функції. 
 
 - usort - сортує масив за значеннями, використовуючи користувацьку 
 функцію для порівняння елементів. 
 - sort - сортує масив.
 - rsort - сортує масив у зворотному порядку.
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
echo "<hr>";

// unset:
unset($week[2]);
unset($week[3]);
unset($week[7]);

// count:
print_r(count($week));
echo "<hr>";

// array_push:
array_push($week, 'new day', 'new day');

// in_array:
var_dump(in_array('Tuesday', $week));
echo "<hr>";

// implode:
print_r(implode(', ', $week));
echo "<br>";

$array = ['ім\'я', 'пошта', 'телефон'];
$comma_separated = implode(",", $array);
echo $comma_separated;
echo "<hr>";

// array_keys:
print_r(array_keys($week));
echo "<hr>";

// array_values:
print_r(array_values($week));
echo "<hr>";

// is_array
$yes = array('це', 'масив');
echo is_array($yes) ? 'Масив' : 'Не масив';
echo "<br>";

$no = 'це рядок';
echo is_array($no) ? 'Масив' : 'Не масив';
echo "<hr>";

//array_fill
$a = array_fill(5, 6, 'banana');
$b = array_fill(-2, 4, 'pear');
print_r($a);
print_r($b);
echo "<hr>";

// array_filter
function odd($var)
{
  // Чи є передане число непарним
  return $var & 1;
}

function even($var)
{
  // чи є передане число парним
  return(!($var & 1));
}

$array1 = ["a" => 1, "b" => 2, "c" => 3, "d" => 4, "e" => 5];
$array2 = [6, 7, 8, 9, 10, 11, 12];

echo "Непарні:<br>";
print_r(array_filter($array1, "odd"));
echo "Парні:<br>";
print_r(array_filter($array2, "even"));
echo "<hr>";

//sort
$fruits = ["lemon", "orange", "banana", "apple"];
sort($fruits);

foreach ($fruits as $key => $val) {
  echo "fruits[$key] = $val <br>";
}
echo '<hr>';

//rsort
$fruits = ["lemon", "orange", "banana", "apple"];
rsort($fruits);

foreach ($fruits as $key => $val) {
  echo "$key = $val<br>";
}
echo '<hr>';

//usort
function cmp($a, $b)
{
  if ($a == $b) {
    return 0;
  }
  return $a < $b ? -1 : 1;
}

$a = array(3, 2, 5, 6, 1);
usort($a, "cmp");
var_dump($a);
echo '<hr>';

/*
Динамічний розмір масиву
Для того, щоб створити динамічний масив, потрібно просто 
під час присвоєння елемента не вказувати індекс.
*/
$arr[] = 'a';
$arr[] = 'b';
$arr[] = 'c';

print_r($arr);
echo "</pre>";