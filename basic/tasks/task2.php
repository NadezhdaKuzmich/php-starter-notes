<?php

// task 1
function compare($x, $y)
{
  if ($x > $y) {
    $highest = $x;
    $lowest = $y;
  } elseif ($x < $y) {
    $highest = $y;
    $lowest = $x;
  }

  if ($x != $y) {
    $msg = "Highest value is: $highest.<br>Lowest value is: $lowest.<br>";
  } else {
    $msg = "Both numbers are equal.";
  }

  return $msg;
}

echo "<b>Task 1:</b><br>";
echo compare(10, 15) . "<br>";
echo compare(28, 17) . "<br>";
echo compare(12, 12) . "<hr>";

// task 2
function chooseCard($x)
{
  switch ($x) {
    case 1:
      return 'Spades';
    case 2:
      return 'Hearts';
    case 3:
      return 'Diamonds';
    case 4:
      return 'Clubs';
    default:
      return "<br><small><b>Sorry, the value is not acceptable!</b> 
      Choose value in-between number 1 till 4.</small>";
  }
}

echo "<b>Task 2:</b><br>";
echo chooseCard(2) . "<br>";
echo chooseCard(4) . "<br>";
echo chooseCard(1) . "<br>";
echo chooseCard(3) . "<br>";
echo chooseCard(5) . "<hr>";

// task 3
function convertGrade($score)
{
  if ($score > 100) {
    return 'Sorry, the value is not acceptable!';
  } elseif ($score >= 90) {
    return 'A';
  } elseif ($score >= 80) {
    return 'B';
  } elseif ($score >= 70) {
    return 'C';
  } elseif ($score >= 60) {
    return 'D';
  } else {
    return 'F';
  }
}

echo "<b>Task 3:</b><br>";
echo convertGrade(44) . "<br>";
echo convertGrade(82) . "<br>";
echo convertGrade(66) . "<br>";
echo convertGrade(98) . "<br>";
echo convertGrade(72) . "<br>";
echo convertGrade(115) . "<hr>";

// task 4
function checkMachine($hours, $age, $failures)
{
  if ($hours >= 10000 || $age > 7 || $failures >= 25) {
    return 'Machine needs to be replaced!';
  } else {
    return 'Machine is in perfect condition!';
  }
}

echo "<b>Task 4:</b><br>";
echo checkMachine(12000, 6, 20) . "<br>";
echo checkMachine(8500, 8, 22) . "<br>";
echo checkMachine(7200, 7, 25) . "<br>";
echo checkMachine(600, 1, 12) . "<hr>";

// task 5
function showLeapYear($year)
{
  if ($year % 400 == 0 || $year % 4 == 0) {
    return "$year is a leap year.";
  } else {
    return "$year isn't a leap year.";
  }
}

echo "<b>Task 5:</b><br>";
echo showLeapYear(2000) . "<br>";
echo showLeapYear(1994) . "<br>";
echo showLeapYear(2024) . "<br>";
echo showLeapYear(2053) . "<hr>";

// task 6
function displayMultTable($x, $y)
{
  $num = 1;
  echo "<small><b>Multiplication table $x</b> (in the rage from 1 to $y):</small><br>";

  while ($num <= $y) {
    $multiplication = $x * $num;
    echo "$x * $num = $multiplication<br>";
    $num++;
  }

  echo "<br>";
}

echo "<b>Task 6:</b><br>";
displayMultTable(4, 6);
displayMultTable(2, 8);
displayMultTable(5, 5);
echo "<hr>";

// task 7
function fibonacci($x)
{
  $num1 = 0;
  $num2 = 1;
  $counter = 0;

  while ($counter < $x) {
    echo $num1 . ' ';
    $num3 = $num1 + $num2;
    $num1 = $num2;
    $num2 = $num3;
    $counter++;
  }

  echo '<br>';
}

echo "<b>Task 7:</b><br>";
fibonacci(8);
fibonacci(11);