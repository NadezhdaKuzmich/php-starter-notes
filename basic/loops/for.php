<?php

/*
Цикл for - ця конструкція передбачає, що кількість ітерацій
циклу заздалегідь відома або обчислювана до початку циклу.
*/

for ($i = 1; $i <= 10; $i++) {
  echo "$i | ";
}
echo '<hr>';

for ($i = 1; ; $i++) {
  if ($i > 10) {
    break;
  }
  echo "$i | ";
}
echo '<hr>';

$i = 1;
for (; ; ) {
  if ($i > 10) {
    break;
  }
  echo "$i | ";
  $i++;
}
echo '<hr>';

for ($i = 1; $i < 10; $i++) {
  if ($i % 2)
    continue;
  echo "$i | ";
}
echo '<hr>';

$week = [
  1 => 'Понеділок',
  'Вівторок',
  'Середа',
  'Четвер',
  'П\'ятниця',
  'Субота',
  'Неділя'
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
echo '<hr>';

$arr = [
  ["Вася", "слюсар", 2500],
  ['Миша', 'будівельник', 3000],
  ['Андрій', 'шофер', 2700]
];

for ($i = 0; $i < count($arr); $i++) {
  for ($j = 0; $j < count($arr[$i]); $j++) {
    echo ' | ' . $arr[$i][$j];
  }
  echo '<br />';
}