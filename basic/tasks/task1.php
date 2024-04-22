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

// task 5
$cm = 150;
$cmToInch = $cm * 0.39;
echo "<b>Task 5:</b><br> $cm centimeters is $cmToInch inches<hr>";

// task 6
$expenses = [40, 58, 99, 24, 12, 36];
$totalAmount = 0;
$amountOfExpenses = 0;

foreach ($expenses as $expense) {
  $totalAmount += $expense;
  $amountOfExpenses++;
}

echo "<b>Task 6:</b><br> My $amountOfExpenses biggest expenses were $totalAmount<hr>";

// task 7
$weather = ["Rain", "Sunshine", "Clouds", "Hail", "Sleet", "Snow", "Wind"];
echo "<b>Task 7:</b><br>";
echo "We've seen all kinds of weather this month.<br> At the beginning of the month, we had
$weather[5] and $weather[6].<br> Then came $weather[1] with a few $weather[2] and some $weather[0].<br> 
At least we didn't get any $weather[3] or $weather[4].";