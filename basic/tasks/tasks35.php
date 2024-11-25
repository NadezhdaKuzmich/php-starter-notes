<?php

// task 1
$nums = [5, 6];

echo "<b>Task 1:</b><br>";
echo array_product($nums);
echo "<hr>";

// task 2
$users = ["Peter", "Joe", "John", "Mike"];

echo "<b>Task 2:</b><br>";
echo current($users) . "<br>";
echo next($users) . "<br>";
echo prev($users);
echo "<hr>";

// task 3
$colors_1 = ["a" => "red", "b" => "green", "c" => "blue", "d" => "yellow"];
$colors_2 = ["a" => "purple", "b" => "orange"];

array_splice($colors_1, 0, 2, $colors_2);

echo "<b>Task 3:</b><br><pre>";
print_r($colors_1);
echo "</pre><hr>";

// task 4
// Magic Constants
echo "<b>Task 4:</b><br>";
echo __DIR__ . "<br>";
echo __FILE__ . "<br>";
echo __LINE__ . "<br>";

function myFunc()
{
  return __FUNCTION__;
}
echo myFunc() . "<br>";

// task 5
$nums = [4, 6, 2, 1, 3, 5];
rsort($nums);
$arrLength = count($nums);

echo "<b>Task 5:</b><br>";
for ($i = 0; $i < $arrLength; $i++) {
  echo $nums[$i];
  echo "<br>";
}
echo "<hr>";

// task 6
$colors = ["red", "green", "blue", "yellow", "black", "white"];

echo "<b>Task 6:</b><br><pre>";
print_r(array_slice($colors, 2));
echo "</pre><hr>";