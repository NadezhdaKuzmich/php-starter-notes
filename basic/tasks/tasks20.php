<?php

// task 1
function dropFromLeft($items, $n = 1)
{
  return array_slice($items, $n);
}

echo "<b>Task 1:</b><br>" . "<pre>";
print_r(dropFromLeft([1, 2, 3]));
echo "<br>";

print_r(dropFromLeft([1, 2, 3, 4], 2));
echo "</pre>" . "<hr>";

// task 2
function findLast($items, $func)
{
  $filteredItems = array_filter($items, $func);
  return array_pop($filteredItems);
}

echo "<b>Task 2:</b><br>";
echo findLast([1, 2, 3, 4], function ($n) {
  return ($n % 2) === 1;
});
echo "<br>";
echo findLast([1, 2, 3, 4], function ($n) {
  return ($n % 2) === 0;
});
echo "<hr>";

// task 3
function findLastIndex($items, $func)
{
  $keys = array_keys(array_filter($items, $func));
  return array_pop($keys);
}

echo "<b>Task 3:</b><br>";
echo findLastIndex([1, 2, 3, 4], function ($n) {
  return ($n % 2) === 1;
});
echo "<br>";
echo findLastIndex([1, 2, 3, 4], function ($n) {
  return ($n % 2) === 0;
});
echo "<hr>";