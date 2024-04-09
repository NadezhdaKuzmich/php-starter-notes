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
 - array_unshift - prepends passed elements at the front of an 
 array. Note that the list of elements is prepended as a whole 
 so that the prepended elements stay in the same order. All 
 numerical array keys will be modified to start counting from 0.
 - is_array - визначає, чи є змінна масивом чи ні.
 - array_fill - заповнює масив значеннями.
 - array_filter - фільтрує елементи масиву за допомогою 
 callback-функції. 

To add or replace values at any position in an array, access the 
array position using the key and assign a value:
 - $arrayName[key]=value;
 
If an old key is used to assign a new value, the old value will be 
replaced. If a new key is used to assign a value, a new key will be 
created in the array.
*/

echo "<pre>";

$week = [
  1 => "Monday",
  2 => "Tuesday",
  3 => "Wednesday",
  4 => "Thursday",
  5 => "Friday",
  6 => "Saturday",
  7 => "Sunday"
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

$fruit = array("first" => "banana", "second" => "apple", "third" => "peaches");
// unset($fruit) unsets the variable and thus removes the whole array, meaning 
// none of its elements are accessible anymore.
// Note: The function unset can also be used to destroy single variables.
unset($fruit);

// count:
$fruits = array("Type" => "Citrus", 1 => "Orange", 2 => "Grapefruit", 3 => "Lemon");
echo "Length of \$fruits is " . count($fruits);
echo "<hr>";

print_r(count($week));
echo "<hr>";

// array_push:
array_push($week, "new day", "new day");

$array = [1, 2, 3];
array_push($array, 5, 6);
print_r($array);
echo "<hr>";

// array_unshift
$myArray = [1, 2, 3];
array_unshift($myArray, 4, 5);
print_r($myArray);
echo "<hr>";

// in_array:
var_dump(in_array("Tuesday", $week));
echo "<hr>";

// implode:
print_r(implode(", ", $week));
echo "<br>";

$array = ["ім\"я", "пошта", "телефон"];
$comma_separated = implode(",", $array);
echo $comma_separated . "<hr>";

// array_keys:
print_r(array_keys($week));
echo "<hr>";

// array_values:
print_r(array_values($week));
echo "<hr>";

// is_array
$yes = ["це", "масив"];
echo is_array($yes) ? "Масив" : "Не масив";
echo "<br>";

$no = "це рядок";
echo is_array($no) ? "Масив" : "Не масив";
echo "<hr>";

//array_fill
$a = array_fill(5, 6, "banana");
$b = array_fill(-2, 4, "pear");
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
  return (!($var & 1));
}

$array1 = ["a" => 1, "b" => 2, "c" => 3, "d" => 4, "e" => 5];
$array2 = [6, 7, 8, 9, 10, 11, 12];

echo "Непарні:<br>";
print_r(array_filter($array1, "odd"));
echo "Парні:<br>";
print_r(array_filter($array2, "even"));
echo "<hr>";

/*
Динамічний розмір масиву
Для того, щоб створити динамічний масив, потрібно просто 
під час присвоєння елемента не вказувати індекс.
*/
$arr[] = "a";
$arr[] = "b";
$arr[] = "c";
print_r($arr);
echo "<hr>";

$arr = [1, 3, 5, 7, 9];
$arr[23] = 71;
$arr[2] = 22;
print_r($arr);
echo "</pre>";