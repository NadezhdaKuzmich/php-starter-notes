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