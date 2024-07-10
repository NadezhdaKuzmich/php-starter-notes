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