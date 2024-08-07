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

// task 7
function repeatSubStr($str, $count)
{
  $firstChars = strlen($str) < 3 ? strlen($str) : 3;
  $subStr = substr($str, 0, $firstChars);

  return str_repeat($subStr, $count);
}

echo "<b>Task 7:</b><br>";
echo repeatSubStr("Python", 2) . "<br>";
echo repeatSubStr("Python", 3) . "<br>";
echo repeatSubStr("JS", 3) . "<hr>";

// task 8
function findSubStr($str, $subStr)
{
  $countOfPresence = 0;

  for ($i = 0; $i < (strlen($str) - 1); $i++) {
    if (substr($str, $i, 2) == $subStr) {
      $countOfPresence++;
    }
  }

  return $countOfPresence;
}

echo "<b>Task 8:</b><br>";
echo findSubStr("bbaaccaag", "bb") . "<br>";
echo findSubStr("jjkiaaasew", "aa") . "<br>";
echo findSubStr("JSakkkoikk", "kk") . "<hr>";

// task 9
function getOddChars($s)
{
  $result = "";

  for ($i = 0; $i < strlen($s); $i += 2) {
    $result .= substr($s, $i, 1);
  }

  return $result;
}

echo "<b>Task 9:</b><br>";
echo getOddChars("Python") . "<br>";
echo getOddChars("PHP") . "<br>";
echo getOddChars("JS") . "<hr>";

// task 10
function isInArray($nums, $num)
{
  return in_array($num, $nums) ? true : false;
}

echo "<b>Task 10:</b><br>";
var_dump(isInArray([1, 2, 9, 3], 3));
echo "<br>";
var_dump(isInArray([1, 2, 2, 3], 2));
echo "<br>";
var_dump(isInArray([1, 2, 2, 3], 4));
echo "<hr>";

// task 11
function modifyStr($str1, $str2)
{
  return $str1 . str_repeat($str2, 2) . $str1;
}

echo "<b>Task 11:</b><br>";
echo modifyStr("Hi", "Hello") . "<br>";
echo modifyStr("whats", "app") . "<hr>";

// task 12
function prepareStr($str1, $word)
{
  return substr($str1, 0, 2) . $word . substr($str1, 2);
}

echo "<b>Task 12:</b><br>";
echo prepareStr("[[]]", "Hello") . "<br>";
echo prepareStr("(())", "Hi");