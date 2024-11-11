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
  return "$str1 - $str2 -";
}
$animals = ["Dog", "Cat", "Mouse"];

echo "<b>Task 4:</b><br>";
print_r(array_reduce($animals, "prepareStr"));
echo "<hr>";

// task 5 
function ediStr($value, $key)
{
  echo "The key $key has the value '$value'<br>";
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

echo "<b>Task 6:</b><br><pre>";
print_r($result);
echo "</pre><hr>";

// task 7
$colors = ["a" => "red", "b" => "green", "c" => "blue"];

echo "<b>Task 7:</b><br><pre>";
echo array_shift($colors) . "<br>";
print_r($colors);
echo "</pre><hr>";

// task 8
$arr = ["Cat", "Cat", "Dog", "Mouse", "Dog"];

echo "<b>Task 8:</b><br><pre>";
print_r(array_count_values($arr));
echo "</pre><hr>";

// task 9
$arr = ["Dog", "Cat", "Mouse"];

list($a, $b, $c) = $arr;
echo "<b>Task 9:</b><br>";
echo "I have several animals, a $a, a $b and a $c.";
echo "<hr>";