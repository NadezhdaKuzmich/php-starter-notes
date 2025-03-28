<?php

// task 1
$letters = ["a", "b", "c", "d", "e"];

echo "<b>Task 1:</b><br><pre>";
var_dump(array_slice($letters, 2, -1));
var_dump(array_slice($letters, 2, -1, true));
echo "</pre><hr>";

// task 2
$arr = ["1" => "a", "2" => "b", "3" => "c"];

echo "<b>Task 2:</b><br>";
print_r(array_rand($arr));
echo "<hr>";

// task 3
$nums = [1, 2, 3, 4];

echo "<b>Task 3:</b><br>";
$mode = current($nums);
print "$mode <br />";

$mode = prev($nums);
print $mode;
echo "<hr>";

// task 4
// Constant Arrays
define('FRUITS', [
  "Banana",
  "Apple",
  "Orange",
  "Blackberry",
]);

echo "<b>Task 4:</b><br>";
print_r(FRUITS);
echo "<hr>";

// task 5
$arr = ["a" => "one", "two", "b" => "one", "three", "four"];
$result = array_unique($arr);

echo "<b>Task 5:</b><br>";
print_r($arr);
echo "<hr>";

// task 6
class SomeObj
{
  public $str;
}

$obj = new SomeObj();
$copy = clone $obj;

echo "<b>Task 6:</b><br>";
echo $obj->str . '<br/>';
$copy->str = "Hello PHP";
echo $copy->str;