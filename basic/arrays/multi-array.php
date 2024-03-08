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

echo "<pre>";
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
echo "</pre>";

echo $A['Petrov']['age'];
echo '<br>';
echo $arr[0][0];