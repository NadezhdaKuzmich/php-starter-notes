<?php

// task 1
function getDayOfTheWeek($day)
{
  switch ($day) {
    case "0":
      return "It is Sunday!";
    case "1":
      return "It is Monday!";
    case "2":
      return "It is Tuesday!";
    case "3":
      return "It is Wednesday!";
    case "4":
      return "It is Thursday!";
    case "5":
      return "It is Friday!";
    case "6":
      return "It is Saturday!";
    default:
      return "Invalid number!";
  }
}

echo "<b>Task 1:</b><br>";
$today = getdate();
echo getDayOfTheWeek($today['wday']);
echo "<hr>";

// task 2
$colors = ["a" => "green", "red", "b" => "green", "blue", "red"];
$result = array_unique($colors);

echo "<b>Task 2:</b><br><pre>";
print_r($colors);
echo "<br>";
print_r($result);
echo "</pre><hr>";

// task 3
$cars = ["Swift", "Honda City", "Elentra"];

echo "<b>Task 3:</b><br><pre>";
print_r($cars);
echo "<br>";

sort($cars);
print_r($cars);
echo "<br>";

rsort($cars);
print_r($cars);
echo "</pre><hr>";

// task 4
$ages = ["John" => "25", "Smith" => "43", "Joe" => "37"];

echo "<b>Task 4:</b><br><pre>";
print_r($ages);
echo "<br>";

asort($ages);
print_r($ages);
echo "<br>";

ksort($ages);
print_r($ages);
echo "<br>";

arsort($ages);
print_r($ages);
echo "<br>";

krsort($ages);
print_r($ages);
echo "<br>";

print_r(array_change_key_case($ages, CASE_UPPER));
echo "<br>";

natcasesort($ages);
print_r($ages);
echo "</pre><hr>";

// task 5
$x = true and false;

echo "<b>Task 5:</b><br>";
var_dump($x); // true
echo "<hr>";