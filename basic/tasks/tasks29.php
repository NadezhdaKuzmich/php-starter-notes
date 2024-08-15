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

// task 3
echo "<b>Task 3:</b><pre>";
for ($i = 1; $i <= 5; $i++) {
  for ($k = 5; $k >= $i; $k--) {
    echo " ";
  }

  for ($j = 1; $j <= $i; $j++) {
    echo "* ";
  }

  echo "<br>";
}

for ($i = 4; $i >= 1; $i--) {
  for ($k = 5; $k >= $i; $k--) {
    echo " ";
  }

  for ($j = 1; $j <= $i; $j++) {
    echo "* ";
  }

  echo "<br>";
}
echo "</pre><hr>";

// task 4
echo "<b>Task 4:</b><br>";
for ($i = 5; $i >= 1; $i--) {
  if ($i % 2 != 0) {
    for ($j = 5; $j >= $i; $j--) {
      echo "* ";
    }

    echo "<br>";
  }
}

for ($i = 2; $i <= 5; $i++) {
  if ($i % 2 != 0) {
    for ($j = 5; $j >= $i; $j--) {
      echo "* ";
    }

    echo "<br>";
  }
}
echo "<hr>";

// task 5
$ch = 'U';

echo "<b>Task 5:</b><br>";
switch ($ch) {
  case 'a':
  case 'e':
  case 'i':
  case 'o':
  case 'u':
  case 'A':
  case 'E':
  case 'I':
  case 'O':
  case 'U':
    echo "Given character is vowel";
    break;
  default:
    echo "Given character is consonant";
    break;
}
echo "<hr>";