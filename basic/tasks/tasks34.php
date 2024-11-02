<?php

// task 1
$names = ["Nadiia", "Vadym", "Tatiana"];
$ages = ["28", "32", "53"];
$users = array_combine($names, $ages);

echo "<b>Task 1:</b><br><pre>";
print_r($users);
echo "</pre><hr>";

// task 2
$colors = ["red", "green", "yellow"];

echo "<b>Task 2:</b><br><pre>";
print_r(array_pad($colors, 5, "blue"));
echo "</pre><hr>";

// task 3
$nums = [2, 16, 28, 24, 65];

echo "<b>Task 3:</b><br>";
echo array_sum($nums);
echo "<hr>";

// task 4
function prepareStr($str1, $str2)
{
  return "$str1 - $str2";
}
$animals = ["Dog", "Cat", "Mouse"];

echo "<b>Task 4:</b><br>";
print_r(array_reduce($animals, "prepareStr"));
echo "<hr>";

// task 5 
function ediStr($value, $key)
{
  echo "The key $key has the value $value<br>";
}

echo "<b>Task 5:</b><br>";
$arr = ["1" => "one", "2" => "two", "3" => "three"];
array_walk($arr, "ediStr");
echo "<hr>";

// task 6
$firstname = "Nadiia";
$lastname = "Kuzmich";
$age = "28";

$result = compact("firstname", "lastname", "age");

echo "<b>Task 6:</b><br>";
print_r($result);
echo "<hr>";