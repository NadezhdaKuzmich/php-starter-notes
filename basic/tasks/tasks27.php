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