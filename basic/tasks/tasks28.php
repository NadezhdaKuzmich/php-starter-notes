<?php

// task 1
function getDayOfTheWeek($day)
{
  switch ($day) {
    case "0":
      return "It is Sunday!";
    case "1":
      return "It is Monday!";
    case "2":
      return "It is Tuesday!";
    case "3":
      return "It is Wednesday!";
    case "4":
      return "It is Thursday!";
    case "5":
      return "It is Friday!";
    case "6":
      return "It is Saturday!";
    default:
      return "Invalid number!";
  }
}

echo "<b>Task 1:</b><br>";
$today = getdate();
echo getDayOfTheWeek($today['wday']);
echo "<hr>";