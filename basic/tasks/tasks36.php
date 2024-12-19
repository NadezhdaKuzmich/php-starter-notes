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
echo substr($str, -5, 3);