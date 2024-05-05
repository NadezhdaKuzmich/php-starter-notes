<?php

// task 1
// script to get the PHP version and configuration information:
// phpinfo();
/*
Note: phpinfo outputs a large amount of information about the 
current state of PHP. This includes information about PHP 
compilation options and extensions, the PHP version, server 
information and environment, the PHP environment, OS version 
information, paths, master and local values of configuration 
options, HTTP headers, and the PHP License.
*/

// task 2
$colors = ['white', 'green', 'red', 'blue', 'black'];
echo "The memory of that scene for me is like a frame of film 
forever frozen at that moment:<br> the $colors[2] carpet,
the $colors[1] lawn, the $colors[0] house, the leaden sky.
The new president and his first lady.<br> - Richard M. Nixon<hr>";

// task 3
$colors = ['white', 'green', 'red'];

foreach ($colors as $color) {
  echo "$color, ";
}

sort($colors);

echo "<ul>";
foreach ($colors as $color) {
  echo "<li>$color</li>";
}
echo "</ul><hr>";

// task 4
$ceu = [
  "Italy" => "Rome",
  "Luxembourg" => "Luxembourg",
  "Belgium" => "Brussels",
  "Denmark" => "Copenhagen",
  "Finland" => "Helsinki",
  "France" => "Paris",
  "Slovakia" => "Bratislava",
  "Slovenia" => "Ljubljana",
  "Germany" => "Berlin",
  "Greece" => "Athens",
  "Ireland" => "Dublin",
  "Netherlands" => "Amsterdam",
  "Portugal" => "Lisbon",
  "Spain" => "Madrid",
  "Sweden" => "Stockholm",
  "United Kingdom" => "London",
  "Cyprus" => "Nicosia",
  "Lithuania" => "Vilnius",
  "Czech Republic" => "Prague",
  "Estonia" => "Tallin",
  "Hungary" => "Budapest",
  "Latvia" => "Riga",
  "Malta" => "Valetta",
  "Austria" => "Vienna",
  "Poland" => "Warsaw"
];

// sort the associative array by values in ascending order:
asort($ceu);

foreach ($ceu as $country => $capital) {
  echo "The capital of $country is $capital" . "<br>";
}
echo "<hr>";

// task 5
$x = [1, 2, 3, 4, 5];
echo "<pre>";
print_r($x);
echo "<br>";

// unset the element with index 3
unset($x[3]);
print_r($x);
echo "<br>";

// array_values повертає масив з усіма елементами масиву array, 
// також заново індексує масив, що повертається, числовими індексами.
$x = array_values($x);
print_r($x);
echo "<hr>";

// task 6
$colors = [4 => 'white', 6 => 'green', 11 => 'red'];

// reset переміщує внутрішній покажчик array до його першого елемента і 
// повертає значення першого елемента масиву або FALSE, якщо масив порожній.
echo reset($colors) . "<br>";

print_r($colors);
echo "<hr>";

// task 7
function printInfo($value, $key)
{
  echo "$key : $value" . "\n";
}

$info = '{
  "Title": "The Cuckoos Calling",
  "Author": "Robert Galbraith",
  "Detail": { 
    "Publisher": "Little Brown"
  }
}';

// приймає закодований у JSON рядок і перетворює його на змінну PHP:
$decInfo = json_decode($info, true);
print_r($decInfo);
echo "<br>";

// рекурсивно застосовує користувацьку функцію до кожного елемента масиву:
array_walk_recursive($decInfo, "printInfo");
echo "<hr>";

// task 8
// array_combine - cтворює новий масив, використовуючи один масив як ключі, 
// а інший як відповідні значення.
// range - cтворює масив, що містить діапазон елементів.
$result = array_combine(range(20, 25), range(2, 7));
print_r($result);
echo "<hr>";

// task 9
function combineArray($keys, $values)
{
  $result = [];

  foreach ($keys as $index => $key) {
    $result[$key][] = $values[$index];
  }

  // array_walk - обійде всі елементи масиву незалежно від позиції покажчика.
  array_walk($result, function (&$value) {
    // array_pop - витягує і повертає значення останнього елемента масиву, 
    // зменшуючи розмір array на один елемент.
    $value = (count($value) == 1) ? array_pop($value) : $value;
  });

  return $result;
}

$array1 = ['x', 'y', 'y'];
$array2 = [10, 20, 30];
print_r(combineArray($array1, $array2));
echo "<hr>";

// task 10
$color1 = ['a' => 'White', 'b' => 'Red', 'c' => ['a' => 'Green', 'b' => 'Blue', 'c' => 'Yellow']];
$color2 = ['a' => 'White', 'b' => 'Red', 'c' => ['a' => 'White', 'b' => 'Red', 'c' => 'Yellow']];
// v1
// array_udiff_assoc - повертає масив, що містить елементи аргументу, яких немає в іншому аргументі:
print_r(array_diff_assoc($color1['c'], $color2['c']));
echo "<br>";

// v2
function compareKey($a, $b)
{
  if ($a === $b) {
    return 0;
  }

  return $a > $b ? 1 : -1;
}

// array_diff_uassoc - обчислює розбіжність масивів з додатковою 
// перевіркою індексу через користувацьку callback-функцію:
print_r(array_diff_uassoc($color1['c'], $color2['c'], "compareKey"));
echo "<hr>";

// task 11
/*
array_fill(index, number, value) - заповнює масив значеннями:
- index => Перший індекс масиву, що повертається.
- number => Задає кількість елементів, що вставляються.
- value => Задає значення, що використовується для заповнення масиву.
*/
$arr = array_fill(0, 4, array_fill(1, 4, 10));
print_r($arr);
echo "<hr>";

// task 12
$string = "  IANA is the global coordinator of the DNS root. 
The root is the upper-most part of the DNS hierarchy, 
and involves delegating administrative responsibility 
of “top-level domains”, which are the last segment of 

a domain name, such as .com, .uk and .nz. Part of this 
task includes evaluating requests to change the operators 

of country code domains, as well as day-to-day maintenance
of the details of the existing operators. ";

// array_filter - повертає масив, що містить значення масиву, відфільтровані 
// відповідно до результату функції зворотного виклику.
// array_map - повертає масив, що містить елементи всіх зазначених масивів 
// після їх обробки функцією зворотного виклику.
// explode - розбиває рядок у масив за певним роздільником.
$result = array_filter(array_map('trim', explode("\n", $string)), 'strlen');
print_r($result);

echo "</pre>";