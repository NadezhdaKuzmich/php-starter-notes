<?php

// task 1
$array1 = ['a', '1', '2', '3', '4'];
$array2 = ['a', '3'];

echo "<b>Task 1:</b><br>";
if (array_intersect($array2, $array1) === $array2) {
  echo "It is a subset";
} else {
  echo "Not a subset";
}
echo "<hr>";

// task 2
function factorial($number)
{
  return $number < 2 ? 1 : $number * factorial($number - 1);
}

echo "<b>Task 2:</b><br>";
echo factorial(4);
echo "<hr>";

// task 3
function checkVote()
{
  $name = "Nadiia";
  $age = 28;

  echo $age >= 18
    ? "$name, you are eligible for vote."
    : "$name, you are not eligible for vote.";
}

echo "<b>Task 3:</b><br>";
checkVote();
echo "<hr>";

// task 4
function rectArea($length = 2, $width = 4)
{
  $area = $length * $width;
  echo "Area Of Rectangle with length: $length & width: $width is $area.";
}

echo "<b>Task 4:</b><br>";
rectArea();
echo "<hr>";

// task 5
echo "<b>Task 5:</b><br>";
for ($row = 1; $row <= 8; $row++) {
  for ($star = 1; $star <= $row; $star++) {
    echo "*";
  }
  echo "<br>";
}
echo "<hr>";

// task 6
class Pupil
{
  public $name = 'Vadym';

  public function displayInfo()
  {
    echo "My name is $this->name.";
  }
}

echo "<b>Task 6:</b><br>";
$p1 = new Pupil();
$p1->displayInfo();
echo "<hr>";

// task 7
echo "<b>Task 7:</b><br>";
echo date("Y-m-d") . "<br>";
echo date("F j, Y, g:i A") . "<br>";
echo date("l, F jS, Y") . "<br>";
echo date("g:i:s a") . "<br>";
echo date("d/m/Y") . "<br>";
echo date("Y/m/d g:i a") . "<hr>";

// task 8
$current = time();
echo "<b>Task 8:</b><br>";
echo "Current Timestamp: $current <br>";
echo 'Current Date: ' . date("Y-m-d", $current) . '<br><br>';

// One month calculation using: 30 days * 24 hours * 60 mins * 60 secs
$next_month = time() + 30 * 24 * 60 * 60;
echo "Next Month Timestamp: $next_month <br>";
echo 'Next Month: ' . date('Y-m-d', $next_month) . '<hr>';

// task 9
echo "<b>Task 9:</b><br>";
setcookie("login", "user", time() + 86400 * 30, "/"); // 86400 = 1 day
echo "Cookie '" . $_COOKIE["login"] . "' is set! <hr>";

// task 10
echo "<b>Task 10:</b><br>";
session_start();

$_SESSION["favcolor"] = "green";
$_SESSION["favanimal"] = "cat";

echo 'Session variables are set: ' . $_SESSION["favcolor"] . ', ' . $_SESSION["favanimal"];