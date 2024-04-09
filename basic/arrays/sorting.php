<?php

/*
Indexed Array:
 - sort - сортує масив.
 - rsort - сортує масив у зворотному порядку.
 - usort - сортує масив за значеннями, використовуючи користувацьку 
функцію для порівняння елементів. 

Associative Array:
 - By Value -
 - asort() can be used to sort associative arrays in ascending order. 
Since associative arrays are key-value pairs, asort sorts the associative 
array on values. Keys with each value will be preserved. 
 - arsort() can be used to sort associative arrays in descending order 
based on their values. 

 - By Key -
 - ksort() can be used to sort an associative array, in ascending order, 
by key. The associated values are preserved during this sort.
 - krsort() can be used to sort an associative array in descending order, 
 by key. The associated values are preserved during this sort.
*/

//sort
$fruits = ["lemon", "orange", "banana", "apple"];
sort($fruits);
echo "<pre>";

foreach ($fruits as $key => $val) {
  echo "fruits[$key] = $val <br>";
}
echo "<hr>";

$fruits = ["Rasberry", "Orange", "Apricot", "Banana", "Apple", "Olive"];
sort($fruits);
print_r($fruits);
echo "<hr>";

//rsort
$fruits = ["lemon", "orange", "banana", "apple"];
rsort($fruits);

foreach ($fruits as $key => $val) {
  echo "$key = $val<br>";
}
echo "<hr>";

//usort
function cmp($a, $b)
{
  if ($a == $b) {
    return 0;
  }
  return $a < $b ? -1 : 1;
}

$a = [3, 2, 5, 6, 1];
usort($a, "cmp");
var_dump($a);
echo "<hr>";

// asort
$fruits = [1 => "Rasberry", 2 => "Orange", 3 => "Apricot", 4 => "Banana", 5 => "Apple", 6 => "Olive"];
asort($fruits);
print_r($fruits);
echo "<hr>";

// arsort
arsort($fruits);
print_r($fruits);
echo "<hr>";

// ksort
$fruits = ["f" => "Rasberry", "d" => "Orange", "a" => "Apricot", "c" => "Banana", "b" => "Apple", "e" => "Olive"];
ksort($fruits);
print_r($fruits);
echo "<hr>";

$numbers = array(-22, 4, 1, 20, 0, -44);
ksort($numbers); // no changes
print_r($numbers);
echo "<hr>";

// krsort
$fruits = ["d" => "Rasberry", "b" => "Orange", "a" => "Apricot", "e" => "Banana", "f" => "Apple", "c" => "Olive"];
krsort($fruits);
print_r($fruits);
echo "</pre>";