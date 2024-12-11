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

// task 7
$arr = array_fill(3, 4, "blue");

echo "<b>Task 7:</b><br><pre>";
print_r($arr);
echo "</pre><hr>";

// task 8
function compare($a, $b)
{
  if ($a === $b) {
    return 0;
  }
  return $a > $b ? 1 : -1;
}

$arr1 = ["a" => "red", "b" => "green", "c" => "blue"];
$arr2 = ["a" => "blue", "b" => "black", "e" => "blue"];

$result = array_uintersect($arr1, $arr2, "compare");
echo "<b>Task 8:</b><br><pre>";
print_r($result);
echo "</pre><hr>";

// task 9
$animals = ["Dog", "Cat", "Mouse", "Bear", "Fish"];
array_multisort($animals);

echo "<b>Task 9:</b><br><pre>";
print_r($animals);
echo "</pre><hr>";

// task 10
$users = ["Peter" => "35", "Ben" => "37", "Joe" => "43"];
asort($users);

echo "<b>Task 10:</b><br>";
foreach ($users as $key => $value) {
  echo "$key: $value<br>";
}
echo "<hr>";

// task 11
function isPalindrome($str)
{
  $str = strtolower(preg_replace('/[^a-z0-9]/', '', $str));
  return $str === strrev($str);
}

echo "<b>Task 11:</b><br>";
$word = "Madam";
if (isPalindrome($word)) {
  echo "$word is a palindrome.<br>";
} else {
  echo "$word is not a palindrome.<br>";
}
echo "<hr>";