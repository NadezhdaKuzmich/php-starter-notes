<?php

// task 1
function editStr($str)
{
  return strlen($str) < 2 ? $str : str_repeat(substr($str, 0, 2), 4);
}

echo "<b>Task 1:</b><br>";
echo editStr("C Sharp") . "<br>";
echo editStr("JS") . "<br>";
echo editStr("a") . "<hr>";

// task 2
function changeStr($str)
{
  $lastChar = substr($str, strlen($str) - 1);
  return $lastChar . $str . $lastChar;
}

echo "<b>Task 2:</b><br>";
echo changeStr("Red") . "<br>";
echo changeStr("Green") . "<br>";
echo changeStr("1") . "<hr>";

// task 3
function findMax($x, $y, $z)
{
  return max($x, $y, $z);
}

echo "<b>Task 3:</b><br>";
echo findMax(1, 2, 3) . "<br>";
echo findMax(1, 3, 2) . "<br>";
echo findMax(1, 1, 1) . "<br>";
echo findMax(1, 2, 2) . "<hr>";