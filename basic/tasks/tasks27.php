<?php

// task 1
$array1 = ['a', '1', '2', '3', '4'];
$array2 = ['a', '3'];

echo "<b>Task 1:</b><br>";
if (array_intersect($array2, $array1) === $array2) {
  echo "It is a subset";
} else {
  echo "Not a subset";
}
echo "<hr>";

// task 2
function factorial($number)
{
  return $number < 2 ? 1 : $number * factorial($number - 1);
}

echo "<b>Task 2:</b><br>";
echo factorial(4);
echo "<hr>";

// task 3
function checkVote()
{
  $name = "Nadiia";
  $age = 28;

  echo $age >= 18
    ? "$name, you are eligible for vote."
    : "$name, you are not eligible for vote.";
}

echo "<b>Task 3:</b><br>";
checkVote();
echo "<hr>";

// task 4
function rectArea($length = 2, $width = 4)
{
  $area = $length * $width;
  echo "Area Of Rectangle with length: $length & width: $width is $area.";
}

echo "<b>Task 4:</b><br>";
rectArea();
echo "<hr>";

// task 5
echo "<b>Task 5:</b><br>";
for ($row = 1; $row <= 8; $row++) {
  for ($star = 1; $star <= $row; $star++) {
    echo "*";
  }
  echo "<br>";
}
echo "<hr>";
