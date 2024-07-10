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