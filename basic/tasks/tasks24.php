<?php

// task 1
function reverseArr($arr)
{
  return array_reverse($arr);
}

echo "<b>Task 1:</b><br>";
$arr = [10, 20, -30, -40, 50];
$result = reverseArr($arr);
echo "Reverse array: " . implode(', ', $result) . "<hr>";

// task 2
function calculateSum($arr)
{
  $result = 0;

  foreach ($arr as $item) {
    $result += $item;
  }

  return $result;
}

echo "<b>Task 2:</b><br>";
echo calculateSum([10, 20, 30, 40, 50]) . "<br>";
echo calculateSum([10, 20, -30, -40, 50]) . "<hr>";

// task 3
function compareFirstAndLastElement($arr)
{
  return count($arr) > 0 && $arr[0] == $arr[count($arr) - 1];
}

echo "<b>Task 3:</b><br>";
var_dump(compareFirstAndLastElement([10, 20, 40, 50]));
echo "<br>";
var_dump(compareFirstAndLastElement([10, 20, 40, 10]));
echo "<br>";
var_dump(compareFirstAndLastElement([12, 24, 35, 55]));
echo "<hr>";

// task 4
function checkFirstOrLast($arr, $givenVal)
{
  return $arr[0] == $givenVal || $arr[count($arr) - 1] == $givenVal;
}

echo "<b>Task 4:</b><br>";
var_dump(checkFirstOrLast([5, 20, 40, 10], 10));
echo "<br>";
var_dump(checkFirstOrLast([10, 20, 40, 10], 20));
echo "<br>";
var_dump(checkFirstOrLast([30, 20, 40, 30], 30));
echo "<br>";
var_dump(checkFirstOrLast([12, 24, 35, 55], 40));
echo "<hr>";