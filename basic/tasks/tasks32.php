<?php

// task 1
function factorial($n)
{
  if ($n < 0)
    return -1;
  if ($n == 0)
    return 1;
  return ($n * factorial($n - 1));
}

echo "<b>Task 1:</b><br>";
echo factorial(5);
echo "<hr>";

// task 2
echo "<b>Task 2:</b><br>";
echo hebrev("What ?????");
echo "<hr>";