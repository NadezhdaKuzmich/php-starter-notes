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