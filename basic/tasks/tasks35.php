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

// task 2
$colors_1 = ["a" => "red", "b" => "green", "c" => "blue", "d" => "yellow"];
$colors_2 = ["a" => "purple", "b" => "orange"];

array_splice($colors_1, 0, 2, $colors_2);

echo "<b>Task 3:</b><br><pre>";
print_r($colors_1);
echo "</pre><hr>";

// task 3
// Magic Constants
echo __DIR__ . "<br>";
echo __FILE__ . "<br>";
echo __LINE__ . "<br>";

function myFunc()
{
  return __FUNCTION__;
}
echo myFunc() . "<br>";