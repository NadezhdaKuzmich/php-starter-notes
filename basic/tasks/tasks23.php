<?php

// task 1
function returnRepeatedLastChars($str)
{
  $lastChars = substr($str, strlen($str) - 2);
  return str_repeat($lastChars, 3);
}

echo "<b>Task 1:</b><br>";
echo returnRepeatedLastChars("Hello") . "<br>";
echo returnRepeatedLastChars("Hi") . "<hr>";

// task 2
function calculateSum($nums)
{
  $result = 0;

  foreach ($nums as $num) {
    $result += $num;
  }

  return $result;
}

echo "<b>Task 2:</b><br>";
echo calculateSum([10, 20, 30, 40, 50]) . "<br>";
echo calculateSum([10, 20, -30, -40, 50]) . "<hr>";

// task 3
function sliceArr($arr, $num)
{
  $newArr = [];

  for ($i = 0; $i < $num; $i++) {
    $newArr[$i] = $arr[$i];
  }

  return $newArr;
}

echo "<b>Task 3:</b><br>";
$result = sliceArr(["a", "b", "bb", "c", "ccc"], 3);
echo implode(" ", $result);
echo "<hr>";

// task 4
function checkLength($arr, $len)
{
  $count = 0;

  for ($i = 0; $i < sizeof($arr); $i++) {
    if (strlen($arr[$i]) == $len)
      $count++;
  }

  return $count;
}

echo "<b>Task 4:</b><br>";
echo checkLength(["a", "b", "bb", "c", "ccc"], 1) . "<br>";
echo checkLength(["aa", "b", "bb", "cc", "ff"], 2);
echo "<hr>";

// task 5
function nextElementEqualOrGreater($arr)
{
  for ($i = 0; $i < sizeof($arr) - 1; $i++) {
    if ($arr[$i + 1] < $arr[$i])
      return false;
  }

  return true;
}

echo "<b>Task 5:</b><br>";
var_dump(nextElementEqualOrGreater([5, 5, 1, 5, 5]));
echo "<br>";
var_dump(nextElementEqualOrGreater([1, 2, 3, 4]));
echo "<br>";
var_dump(nextElementEqualOrGreater([3, 3, 5, 5, 5, 5]));
echo "<br>";
var_dump(nextElementEqualOrGreater([1, 5, 5, 7, 8, 10]));
echo "<hr>";

// task 6
function calculateResult($nums)
{
  $sum = 0;

  for ($i = 0; $i < sizeof($nums); $i++) {
    if ($nums[$i] != 17)
      $sum += $nums[$i];
  }

  return $sum;
}

echo "<b>Task 6:</b><br>";
echo "Sum of values in the array of integers except the number 17: " . calculateResult([1, 5, 7, 9, 10, 17]);
echo "<hr>";