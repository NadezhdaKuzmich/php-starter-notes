<?php

// task 1
function randPass($upper = 1, $lower = 5, $numeric = 3, $other = 2)
{
  $passOrder = [];
  $passWord = '';

  for ($i = 0; $i < $upper; $i++) {
    // chr - генерує односимвольний рядок за заданим 
    // числом, код якого задано аргументом ascii:
    $passOrder[] = chr(rand(65, 90));
  }

  for ($i = 0; $i < $lower; $i++) {
    $passOrder[] = chr(rand(97, 122));
  }

  for ($i = 0; $i < $numeric; $i++) {
    $passOrder[] = chr(rand(48, 57));
  }

  for ($i = 0; $i < $other; $i++) {
    $passOrder[] = chr(rand(33, 47));
  }

  // shuffle здійснює перемішування масиву так, щоб 
  // його елементи йшли у випадковому порядку:
  shuffle($passOrder);

  foreach ($passOrder as $char) {
    $passWord .= $char;
  }

  return $passWord;
}

echo "<pre>";
echo "<b>Task 1:</b><br>";
echo "Generated Password 1: " . randPass();
echo "<br>";
echo "Generated Password 2: " . randPass(2, 4, 4, 1);
echo "<hr>";

// task 2
function shuffleAssoc($arr)
{
  $keys = array_keys($arr);
  $newArr = [];

  // Зауваження: 
  // shuffle - присвоює нові ключі елементам масиву: 
  // видалить усі наявні ключі, а не просто перевпорядкує їх.
  shuffle($keys);

  foreach ($keys as $key) {
    $newArr[$key] = $arr[$key];
  }

  return $newArr;
}

$colors = ["color1" => "Red", "color2" => "Green", "color3" => "Yellow"];

echo "<b>Task 2:</b><br>";
print_r(shuffleAssoc($colors));
echo "<hr>";

// task 3
$myArr = [" ", "<", "&"];
sort($myArr);

echo "<b>Task 3:</b><br>";
print_r($myArr);
echo "<hr>";

// task 4
$colors = [
  "color1",
  "cOlor20",
  "coLor3",
  "colOr2",
  "coloR12",
];

/*
- SORT_NATURAL - використовується для порівняння елементів 
як рядків, використовуючи природне впорядкування.
- SORT_FLAG_CASE - може бути об'єднана з SORT_STRING або 
SORT_NATURAL для регістронезалежного сортування рядків
*/
sort($colors, SORT_NATURAL | SORT_FLAG_CASE);

echo "<b>Task 4:</b><br>";
foreach ($colors as $key => $val) {
  echo "Colors[" . $key . "] = " . $val . "<br>";
}
echo "<hr>";

echo "</pre>";