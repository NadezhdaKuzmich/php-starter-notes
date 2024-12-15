<?php

// task 1
$cars = ["Volvo" => "XC90", "BMW" => "X5"];

if (array_key_exists("Volvo", $cars)) {
  echo "Key exists!";
} else {
  echo "Key does not exist!";
}