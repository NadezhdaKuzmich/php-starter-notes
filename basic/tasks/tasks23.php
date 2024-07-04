<?php

// task 1
function test($str)
{
  $lastChars = substr($str, strlen($str) - 2);
  return str_repeat($lastChars, 3);
}

echo "<b>Task 1:</b><br>";
echo test("Hello") . "<br>";
echo test("Hi") . "<hr>";