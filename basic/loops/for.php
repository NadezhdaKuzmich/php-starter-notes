<?php

/*
Цикл for - ця конструкція передбачає, що кількість ітерацій
циклу заздалегідь відома або обчислювана до початку циклу.
*/

for ($i = 0; $i < 10; $i++) {
  echo "$i | ";
}
echo "<hr>";

for ($i = 0; $i < 10; $i += 2) {
  echo "$i | ";
}
echo "<hr>";

for ($i = 1; $i < 10; $i += 2) {
  echo "$i | ";
}
echo "<hr>";

for ($i = 1; ; $i++) {
  if ($i > 10) {
    break;
  }
  echo "$i | ";
}
echo "<hr>";

$i = 1;
for (; ; ) {
  if ($i > 10) {
    break;
  }
  echo "$i | ";
  $i++;
}
echo "<hr>";

for ($i = 1; $i < 10; $i++) {
  if ($i % 2)
    continue;
  echo "$i | ";
}
echo "<hr>";

$i;
for ($i = 0; $i < 10; $i++) {
  $i = $i * 2;
  echo "Value of i is: $i <br>";
}
echo "Final value of i is: $i <br>";
echo "<hr>";

$week = [
  1 => "Понеділок",
  "Вівторок",
  "Середа",
  "Четвер",
  "П\"ятниця",
  "Субота",
  "Неділя"
];

$weekDay = 1;
$month = [];

for ($day = 1; $day <= 31; $day++) {

  $month[$day] = $week[$weekDay];

  if ($weekDay % 7 === 0) {
    $weekDay = 1;
  } else {
    $weekDay++;
  }
}

echo "<pre>";
print_r($month);
echo "<pre>";
echo "<hr>";

$input = 5;
echo "How many missiles will you fire?<br />";
echo "I will fire: $input missiles<br /><br />";

for ($i = 0; $i < $input; $i++) {
  for ($j = 3; $j > 0; $j--) {
    echo "$j.. ";
  }
  $temp = $i + 1;
  echo "Missile $temp has launched!<br /><br />";
}
echo "All missiles have been launched.<br />";
echo "<hr>";

$arr = [
  ["Вася", "слюсар", 2500],
  ["Миша", "будівельник", 3000],
  ["Андрій", "шофер", 2700]
];

for ($i = 0; $i < count($arr); $i++) {
  for ($j = 0; $j < count($arr[$i]); $j++) {
    echo " | " . $arr[$i][$j];
  }
  echo "<br />";
}