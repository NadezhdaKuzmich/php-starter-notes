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

// task 6
$str = "The rain in SPAIN falls mainly on the plains.";
$pattern = "/ain/i";

echo "<b>Task 6:</b><br>";
echo preg_match_all($pattern, $str);
echo "<hr>";

// task 7
$cars = ["brand" => "Ford", "model" => "Mustang"];

echo "<b>Task 7:</b><br>";
$cars += ["color" => "red", "year" => 1964];
echo "<hr>";

// task 8
$json_obj = '{"One":1,"Two":2,"Three":3}';

echo "<b>Task 8:</b><br><pre>";
var_dump(json_decode($json_obj));
echo "</pre><hr>";

// task 9
$obj = ["One" => 1, "Two" => 2, "Three" => 3];

echo "<b>Task 9:</b><br>";
echo json_encode($obj);
echo "<hr>";

// task 10
function divide($dividend, $divisor)
{
  if ($divisor == 0) {
    throw new Exception("Division by 0!");
  }
  return $dividend / $divisor;
}

echo "<b>Task 10:</b><br>";
try {
  echo divide(25, 5) . "<br>";
  echo divide(5, 0) . "<br>";
} catch (Exception $e) {
  echo "Unable to divide.";
}
echo "<hr>";

// task 11
$int = 100;

echo "<b>Task 11:</b><br>";
if (filter_var($int, FILTER_VALIDATE_INT)) {
  echo "Integer is valid";
} else {
  echo "Integer is not valid";
}
echo "<hr>";