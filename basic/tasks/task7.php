<?php

// task 1
$myArray = ["red", "black", "green", "black", "white", "yellow"];

// array_values - повертає індексний масив з усіма значеннями масиву.
// array_unique - прибирає повторювані значення з масиву.
$sortedUniqueArray = array_values(array_unique($myArray));

echo "<pre>";
echo "<b>Task 1:</b><br>";
print_r($sortedUniqueArray);
echo "<hr>";

// task 2
$colors = [
  0 => "Red",
  1 => "Green",
  2 => "White",
  3 => "Black",
  4 => "Red",
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
echo "<br>";
print_r($uniq_numbers);
echo "<hr>";

// task 3
function countValues($myArray, $match)
{
  $count = 0;

  foreach ($myArray as $key => $value) {
    if ($value == $match) {
      $count++;
    }
  }

  return $count;
}

$colors = ["c1" => "Red", "c2" => "Green", "c3" => "Yellow", "c4" => "Red"];
echo "<b>Task 3:</b><br>";
echo "Color 'Red' appears " . countValues($colors, "Red") . " time(s).";
echo "<hr>";

// task 4
$colors = ["Red", "Green", "Black", "White"];

echo "<b>Task 4:</b><br>";
print_r($colors);
echo "<br>";

// array_map - повертає масив, що містить елементи всіх зазначених 
// масивів після їх обробки функцією зворотного виклику.
// strtolower - перетворює рядок у нижній регістр.
$lower_colors = array_map("strtolower", $colors);
print_r($lower_colors);
echo "<br>";

// strtoupper - перетворює рядок у верхній регістр.
$upper_colors = array_map("strtoupper", $colors);
print_r($upper_colors);
echo "<hr>";

echo "</pre>";