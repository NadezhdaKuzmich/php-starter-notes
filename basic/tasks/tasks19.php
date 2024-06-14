<?php

// task 1
echo "<b>Task 1:</b><br>";
// Цей код виведе назву операційної системи, на якій виконується PHP:
echo PHP_OS . "<br>";
// php_uname - повертає опис операційної системи, на якій запущено PHP:
echo php_uname() . "<br>";

if (strtoupper(substr(PHP_OS, 0, 3)) === 'WIN') {
  echo 'This is a server using Windows!';
} else {
  echo 'This is a server not using Windows!' . "<br>";
}
echo "<hr>";

// task 2
echo "<b>Task 2:</b><br>";
$a = 15;
$b = 276;

echo "Before swapping:  " . $a . ', ' . $b . "<br>";
// list - використовується для того, щоб присвоїти списку змінних 
// значення за одну операцію:
list($a, $b) = [$b, $a];

echo "After swapping:  " . $a . ', ' . $b . "<hr>";

// task 3
function removeDuplicates($list1)
{
  // array_values - повертає індексний масив з усіма значеннями масиву.
  // array_unique - повертає новий масив без повторюваних значень:
  $nums_unique = array_values(array_unique($list1));
  return $nums_unique;
}

echo "<b>Task 3:</b><br><pre>";
$nums = [1, 1, 2, 2, 3, 4, 5, 5];
print_r(removeDuplicates($nums));
echo "</pre><hr>";