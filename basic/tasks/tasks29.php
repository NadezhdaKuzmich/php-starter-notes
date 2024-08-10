<?php

// task 1
$num = 14597;
$sum = 0;

for ($i = 0; $i < strlen($num); $i++) {
  $sum += (int) (((string) $num)[$i]);
}

echo "<b>Task 1:</b><br>";
echo "Sum of digits 14597 is $sum";
echo "<hr>";

// task 2
$seasons = ["Winter", "Spring", "Summer", "Autumn"];

echo "<b>Task 2:</b><br>";
foreach ($seasons as $season) {
  echo $season;
  echo $season !== $seasons[count($seasons) - 1]
    ? ', '
    : '.';
}
echo "<hr>";