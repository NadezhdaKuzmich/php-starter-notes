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