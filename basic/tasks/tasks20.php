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

// task 4
function groupBy($items, $func)
{
  $group = [];

  foreach ($items as $item) {
    // is_string - визначає, чи є змінна рядком.
    // is_callable - визначає, чи може вміст змінної бути викликаний як функція.
    // function_exists - перевіряє, чи є функція у списку певних функцій, як 
    // вбудованих (внутрішніх), так і користувацьких:
    if ((!is_string($func) && is_callable($func)) || function_exists($func)) {
      // call_user_func - викликає callback-функцію, передану першим параметром, 
      // і передає інші параметри як аргументи:
      $key = call_user_func($func, $item);
      $group[$key][] = $item;
    }
  }

  return $group;
}

echo "<b>Task 4:</b><br>" . "<pre>";
print_r(groupBy(['one', 'two', 'three', 'four'], 'strlen'));
echo "</pre>" . "<hr>";