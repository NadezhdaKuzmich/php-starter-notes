<?php

// task 1
$x = 8;
$y = 7;

$res = ($x + $y) * 5;
echo "<b>Task 1:</b><br> The total is: $res <hr>";

// task 2
$price = 120;
$vat = 0.21;

$totalPrice = $price * $vat + $price;
echo "<b>Task 2:</b><br> Price: $price <br>";
echo "Vat: $vat <br>";
echo "Total price: $totalPrice <hr>";

// task 3
$x = 4;
$y = 9;
$z = 6;

$average = ($x + $y + $z) / 3;
echo "<b>Task 3:</b><br> Average: " . number_format($average, 2, ',', ' ') . "<hr>";

// task 4
$countries = [
  "Netherlands" => "Amsterdam",
  "Germany" => "Berlin",
  "Thailand" => "Bangkok",
  "Denmark" => "Copenhagen",
  "Canada" => "Toronto"
];

echo "<b>Task 4:</b><br>";

foreach ($countries as $key => $value) {
  echo "The capital of $key is $value. <br>";
}

echo "<hr>";