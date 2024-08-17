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

// task 6
$car = "Hyundai";
$model = "Tucson";

echo "<b>Task 6:</b><br>";
switch ($car) {
  case "Honda":
    switch ($model) {
      case "Amaze":
        echo "Honda Amaze price is 5.93 - 9.79 Lakh.";
        break;
      case "City":
        echo "Honda City price is 9.91 - 14.31 Lakh.";
        break;
    }
    break;
  case "Renault":
    switch ($model) {
      case "Duster":
        echo "Renault Duster price is 9.15 - 14.83 L.";
        break;
      case "Kwid":
        echo "Renault Kwid price is 3.15 - 5.44 L.";
        break;
    }
    break;
  case "Hyundai":
    switch ($model) {
      case "Creta":
        echo "Hyundai Creta price is 11.42 - 18.73 L.";
        break;
      case "Tucson":
        echo "Hyundai Tucson price is 22.39 - 32.07 L.";
        break;
      case "Xcent":
        echo "Hyundai Xcent price is 6.5 - 10.05 L.";
        break;
    }
    break;
}
echo "<hr>";

// task 7
$number = ["One", "Two", "Three", "Stop", "Four"];

echo "<b>Task 7:</b><br>";
foreach ($number as $element) {
  if ($element == "Stop") {
    break;
  }
  echo "$element <br>";
}
echo "<hr>";

// task 8
echo "<b>Task 8:</b><br>";
echo "Even numbers between 1 to 20: <br>";
$i = 1;

while ($i <= 20) {
  $i++;

  if ($i % 2 == 1) {
    continue;
  }

  echo "$i <br>";
}
echo "<hr>";

// task 9
$arr = [
  [1, "sonoo", 400000],
  [2, "john", 500000],
  [3, "rahul", 300000]
];

echo "<b>Task 9:</b><br>";
for ($row = 0; $row < 3; $row++) {
  for ($col = 0; $col < 3; $col++) {
    echo $arr[$row][$col] . "  ";
  }
  echo "<br/>";
}
echo "<hr>";