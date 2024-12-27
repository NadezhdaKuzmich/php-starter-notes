<?php

// task 1
$cars = ["Volvo" => "XC90", "BMW" => "X5"];

echo "<b>Task 1:</b><br>";
if (array_key_exists("Volvo", $cars)) {
  echo "Key exists!";
} else {
  echo "Key does not exist!";
}
echo "<hr>";

// task 2
$str = "Hello World!";

echo "<b>Task 2:</b><br>";
echo substr($str, -5, 3);
echo "<hr>";

// task 3
echo "<b>Task 3:</b><br>";
echo substr($str, 6, 5);
echo "<hr>";

// task 4
echo "<b>Task 4:</b><br>";
echo strlen($str) . "<br>";
echo str_word_count($str) . "<br>";
echo strpos($str, "world");
echo str_replace("Hello", "Bye", $str);
echo "<hr>";

// task 5
echo "<b>Task 5:</b><br>";
echo "Today is " . date("d.m.Y") . "<br>";
echo "Today is " . date("Y/m/d") . "<hr>";