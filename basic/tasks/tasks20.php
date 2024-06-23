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

// task 5
function squared(&$num)
{
  return $num *= $num;
}

$number = 9;
squared($number);
echo "<b>Task 5:</b><br>";
echo $number . "<hr>";

// task 6
function sayHello()
{
  echo 'Hello world!';
}

// dynamic function call:
$newFuncVarName = 'sayHello';
echo "<b>Task 6:</b><br>";
$newFuncVarName();
echo "<hr>";

// task 7
function printFromScope()
{
  global $outsideVar;
  echo $outsideVar;
}

$outsideVar = "This is a global variable.";
echo "<b>Task 7:</b><br>";
printFromScope();
echo "<hr>";

// task 8
function hasDuplicates($items)
{
  // array_unique - бере як параметр масив і повертає 
  // новий масив без повторюваних значень:
  if (count($items) > count(array_unique($items)))
    return true;
  else
    return false;
}

echo "<b>Task 8:</b><br>";
var_dump(hasDuplicates([1, 2, 3, 4, 5, 5]));
echo "<br>";
var_dump(hasDuplicates([1, 2, 3, 4, 5]));
echo "<hr>";

// task 9
function last($items)
{
  // endv - зсуває внутрішній покажчик масиву array на 
  // останній елемент і повертає його значення:
  return end($items);
}

echo "<b>Task 9:</b><br>";
print_r(last([1, 2, 3]));
echo "<br>";
print_r(last([3, -4, 5, 1, 2]));
echo "<hr>";

// task 10
function pluck($items, $key)
{
  return array_map(function ($item) use ($key) {
    return $item[$key];
  }, $items);
}

echo "<b>Task 10:</b><br>" . "<pre>";
print_r(pluck([
  ['product_id' => 'p100', 'name' => 'Computer'],
  ['product_id' => 'p200', 'name' => 'Laptop'],
], 'name'));
echo "</pre>" . "<hr>";

// task 11
function pull(&$items, ...$params)
{
  $items = array_values(array_diff($items, $params));

  return $items;
}

$items = ['a', 'b', 'c', 'a', 'b', 'c'];
echo "<b>Task 11:</b><br>" . "<pre>";
print_r(pull($items, 'a', 'c'));
echo "</pre>" . "<hr>";