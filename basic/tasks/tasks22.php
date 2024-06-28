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