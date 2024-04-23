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
      return "<br><small><b>Wrong request:</b> Choose value in-between number 1 till 4.</small>";
  }
}

echo "<b>Task 2:</b><br>";
echo chooseCard(2) . "<br>";
echo chooseCard(4) . "<br>";
echo chooseCard(1) . "<br>";
echo chooseCard(3) . "<br>";
echo chooseCard(5) . "<hr>";