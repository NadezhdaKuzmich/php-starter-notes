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

// task 4
function checkSameLastDigit($x, $y)
{
  return abs($x % 10) == abs($y % 10);
}

echo "<b>Task 4:</b><br>";
var_dump(checkSameLastDigit(123, 456));
echo "<br>";
var_dump(checkSameLastDigit(12, 512));
echo "<br>";
var_dump(checkSameLastDigit(7, 87));
echo "<br>";
var_dump(checkSameLastDigit(12, 45));
echo "<hr>";

// task 5
function toUpperLastChars($s)
{
  return strlen($s) < 3
    ? strtoupper($s)
    : substr($s, 0, strlen($s) - 3) . strtoupper(substr($s, strlen($s) - 3));
}

echo "<b>Task 5:</b><br>";
echo toUpperLastChars("Python") . "<br>";
echo toUpperLastChars("Javascript") . "<br>";
echo toUpperLastChars("js") . "<br>";
echo toUpperLastChars("Php") . "<hr>";

// task 6
function repeatStr($str, $count = 1)
{
  return str_repeat($str, $count);
}

$str = 'JS';

echo "<b>Task 6:</b><br>";
echo repeatStr($str) . "<br>";
echo repeatStr($str, 2) . "<br>";
echo repeatStr($str, 3) . "<hr>";
