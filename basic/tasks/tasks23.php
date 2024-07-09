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

// task 7
function findDifference($nums)
{
  return max($nums) - min($nums);
}

echo "<b>Task 7:</b><br>";
echo "Difference between the largest and smallest values: " . findDifference([1, 5, 7, 9, 10, 12]);
echo "<hr>";

// task 8
function countEven($nums)
{
  $evens = 0;

  for ($i = 0; $i < sizeof($nums); $i++) {
    if ($nums[$i] % 2 == 0)
      $evens++;
  }

  return $evens;
}

echo "<b>Task 8:</b><br>";
echo "Number of even elements: " . countEven([1, 5, 7, 9, 10, 12]);
echo "<hr>";

// task 9
function combineArrays($arr1, $arr2)
{
  return array_merge($arr1, $arr2);
}

echo "<b>Task 9:</b><br>";
$result = combineArrays([10, 20, 30], [40, 50, 60]);
echo "New array: " . implode(', ', $result);
echo "<hr>";

// task 10
function findLargestSum($arr1, $arr2)
{
  $sum1 = 0;
  $sum2 = 0;

  if (count($arr1) === 3 && count($arr2) === 3) {
    for ($i = 0; $i < 3; $i++) {
      $sum1 += $arr1[$i];
      $sum2 += $arr2[$i];
    }
  } else {
    return 'Inappropriate array length.';
  }

  return ($sum1 > $sum2
    ? $arr1
    : $sum1 === $sum2)
    ? 'The sums of the arrays are the same.'
    : $arr2;
}

echo "<b>Task 10:</b><br>";
$result = findLargestSum([10, 20, -30], [10, 20, 30]);
echo "<pre>";
print_r($result);
echo "</pre>";
echo "<hr>";