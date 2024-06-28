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