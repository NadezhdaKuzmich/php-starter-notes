<?php

// task 1
function factorial($n)
{
  if ($n < 0)
    return -1;
  if ($n == 0)
    return 1;
  return $n * factorial($n - 1);
}

echo "<b>Task 1:</b><br>";
echo factorial(5);
echo "<hr>";

// task 2
echo "<b>Task 2:</b><br>";
echo hebrev("What ?????");
echo "<hr>";

// task 3
$str = "Hello, welcome to PhP.";

echo "<b>Task 3:</b><br><pre>";
print_r(explode(" ", $str));
echo "</pre><hr>";

// task 4
$str1 = "Hi everyone! Welcome to PhP";
$del = "e";

$token = strtok($str1, $del);
echo "<b>Task 4:</b><br><pre>";
while ($token !== false) {
  echo "$token <br>";
  $token = strtok($del);
}
echo "<hr>";