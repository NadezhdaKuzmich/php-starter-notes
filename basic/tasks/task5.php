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

echo "</pre>";