<?php

// task 1
$myArray = ["red", "black", "green", "black", "white", "yellow"];

// array_values - повертає індексний масив з усіма значеннями масиву.
// array_unique - прибирає повторювані значення з масиву.
$sortedUniqueArray = array_values(array_unique($myArray));

echo '<pre>';
echo "<b>Task 1:</b><br>";
print_r($sortedUniqueArray);
echo '<hr>';

// task 2
$colors = [
  0 => 'Red',
  1 => 'Green',
  2 => 'White',
  3 => 'Black',
  4 => 'Red',
];

$numbers = [
  0 => 100,
  1 => 200,
  2 => 100,
  3 => -10,
  4 => -10,
  5 => 0,
];

$uniq_colors = array_keys(array_flip($colors));
$uniq_numbers = array_keys(array_flip($numbers));

echo "<b>Task 2:</b><br>";
print_r($uniq_colors);
echo '<br>';
print_r($uniq_numbers);
echo '<hr>';

echo '</pre>';