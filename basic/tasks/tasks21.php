<?php

// task 1
function tail($items)
{
  return count($items) > 1 ? array_slice($items, 1) : $items;
}

echo "<b>Task 1:</b><br>" . "<pre>";
print_r(tail([1, 2, 3]));
echo "</pre>" . "<hr>";

// task 2
function take($items, $count = 1)
{
  return array_slice($items, 0, $count);
}

echo "<b>Task 2:</b><br>" . "<pre>";
print_r(take([1, 2, 3], 1));
echo "<br>";
print_r(take([1, 2, 3, 4, 5], 2));
echo "</pre>" . "<hr>";
