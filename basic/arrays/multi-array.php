<?php

/*
Багатомірний масив 
- це масив, який як значення зберігає в собі інші масиви.
- це впорядковане відображення, яке встановлює відповідність 
між двома значеннями. (Колонки та рядки)

Доступ до елементів багатовимірного масиву виходить так, як 
і до одновимірного, тільки додається +1 параметр на кожну 
додаткову розмірність масиву.
*/

$check = array("elephant", array("honey", "sad", 5));
echo "<pre>";
print_r($check);

$comparisonAdjectives = array(
  array(
    "good",
    "better",
    "best"
  ),
  array(
    "bad",
    "worse",
    "worst"
  ),
  array(
    "tall",
    "taller",
    "tallest"
  )
);
print_r($comparisonAdjectives);
echo "<br>" . $comparisonAdjectives[1][2] . "<br><br>";

$economy = array(
  array(
    "country" => "Germany",
    "currency" => "Euro",
  ),
  array(
    "country" => "Switzerland",
    "currency" => "Swiss Franc",
  ),
  array(
    "country" => "England",
    "currency" => "Pound",
  )
);
echo "Currency of Germany is: {$economy[0]["currency"]}<br><br>";

$movies = [
  "comedy" => [
    "Pink Panther",
    "John English",
    "See no evil hear no evil"
  ],
  "action" => [
    "Die Hard",
    "Expendables"
  ],
  "premiere" => [
    "action" => [
      "The Lord of the rings"
    ],
    "romance" => [
      "Romeo and Juliet"
    ],
  ]
];

print_r($movies);
print_r($movies["comedy"]);

print_r($movies["premiere"]["romance"]);
// best way:
$premiere = $movies['premiere'];
print_r($premiere['romance']);

print_r($movies["comedy"][0]);

$A["Ivanov"] = array("name" => "Іванов І.І.", "age" => "25", "email" => "ivanov@mail.ru");
$A["Petrov"] = array("name" => "Петров П.П.", "age" => "34", "email" => "petrov@mail.ru");
$A["Sidorov"] = array("name" => "Sidorov S.S.", "age" => "47", "email" => "sidorov@mail.ru");

$arr = [
  array('Василь', 'слюсар', 2500),
  array('Міша', 'будівельник', 3000),
  array('Андрій', 'водій', 2700)
];

print_r($A);
print_r($arr);

echo $A['Petrov']['age'];
echo '<br>';
echo $arr[0][0];
echo '<br><br>';

function printMat($n)
{
  $arr = [];

  for ($i = 0; $i < $n; $i++) {
    for ($j = 0; $j < $n; $j++) {
      if ($i == $j) {
        $arr[$i][$j] = 0;
      } else if ($i > $j) { 
        $arr[$i][$j] = -1;
      } else {
        $arr[$i][$j] = 1;
      }
    }
  }

  for ($i = 0; $i < $n; $i++) {
    for ($j = 0; $j < $n; $j++) {
      echo "{$arr[$i][$j]} ";
    }
    echo PHP_EOL;
  }
}
// PHP_EOL є спеціальною константою в мові програмування PHP, 
// яка являє собою символ кінця рядка залежно від операційної 
// системи. Вона дає змогу зробити код більш переносимим і 
// зручним для читання.
printMat(3);
echo "</pre>";