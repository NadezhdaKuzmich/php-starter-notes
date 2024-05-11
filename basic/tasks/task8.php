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

// task 5
$info = [
  [
    'name' => 'Sana',
    'email' => 'sana@example.com',
    'phone' => '111-111-1234',
    'country' => 'USA',
  ],
  [
    'name' => 'Robin',
    'email' => 'robin@example.com',
    'phone' => '222-222-1235',
    'country' => 'UK',
  ],
  [
    'name' => 'Sofia',
    'email' => 'sofia@example.com',
    'phone' => '333-333-1236',
    'country' => 'India',
  ]
];

function sortBySpecKey($myArray, $key)
{
  // usort - сортує масив за значеннями, використовуючи 
  // користувацьку функцію для порівняння елементів:
  usort($myArray, function ($arr1, $arr2) use ($key) {
    if ($arr1[$key] == $arr2[$key]) {
      return 0;
    }

    return $arr1[$key] > $arr2[$key] ? 1 : -1;
  });

  return $myArray;
}

echo "<b>Task 5:</b><br>";
print_r(sortBySpecKey($info, "name"));
echo "<br>";
print_r(sortBySpecKey($info, "country"));
echo "<hr>";

// task 6
function sortSubnets($first, $second)
{
  $first_arr = explode('.', $first);
  $second_arr = explode('.', $second);


  foreach (range(0, 3) as $i) {
    if ($first_arr[$i] < $second_arr[$i]) {
      return -1;
    } elseif ($first_arr[$i] > $second_arr[$i]) {
      return 1;
    }
  }

  return -1;
}

$subnetList = [
  '192.169.12',
  '192.167.11',
  '192.169.14',
  '192.168.13',
  '192.167.12',
  '122.169.15',
  '192.167.16'
];

usort($subnetList, 'sortSubnets');

echo "<b>Task 6:</b><br>";
print_r($subnetList);
echo "<hr>";

// task 7
function compareList($a, $b)
{
  global $order;

  foreach ($order as $value) {
    if ($a == $value) {
      return 0;
    }

    if ($b == $value) {
      return 1;
    }
  }
}

$order = [4, 3, 2, 1];
$array = [2, 1, 3, 4, 2, 1];

usort($array, "compareList");
echo "<b>Task 7:</b><br>";
print_r($array);
echo "<hr>";

// task 8
$color = [
  "color" => ["a" => "Red", "b" => "Green", "c" => "White"],
  "numbers" => [1, 2, 3, 4, 5, 6],
  "holes" => ["First", 5 => "Second", "Third"]
];

echo "<b>Task 8:</b><br>";
echo $color["holes"][5] . "<br>";
echo $color["color"]["a"];
echo "<hr>";


echo "</pre>";