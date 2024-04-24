<?php

/*
Користувацька функція - функція, що створена програмістом для своїх 
певних цілей і може використовувати всередині себе інші функції.
Функція - блок коду, який може бути іменований і викликаний повторно. 

function myFunction ($параметр_1, $параметр_2, ..., $параметр_N) 
{
  тіло_функції;
  return значення;
}

myFunction();
*/

// Оголошення та виклик функцій у PHP
function exampleFunc()
{
  echo "This is a user-defined function!";
}
exampleFunc();
echo "<hr>";

hi();
// HI();
echo "<hr>";

function sayHello()
{
  echo "Привіт світ!";
}

function hi()
{
  sayHello();
}

function outer()
{
  inner();
}

function inner()
{
  echo "HI!";
}

outer();
echo "<hr>";

/*
Анонімна функція - користувацька функція без іменного ідентифікатора. 
Зазвичай використовується для обробки локальних даних або як callback 
function.
*/

$anonymous = function ($x, $y) {
  return [$x, $y];
};

print_r($anonymous("a", "b"));
echo "<hr>";

$anonymousFunction = function ($text) {
  echo $text;
};

$anonymousFunction(":)");
echo "<hr>";

function gpaPoint($grade)
{
  switch ($grade) {
    case "A+":
    case "A":
      return 4;
    case "A-":
      return 3.7;
    case "B+":
      return 3.3;
    case "B":
      return 3;
    case "B-":
      return 2.8;
    case "C+":
      return 2.5;
    case "C":
      return 2;
    case "C-":
      return 1.8;
    case "D":
      return 1.5;
    case "F":
      return 0;
    default:
      return -1;
  }
}

echo gpaPoint("A+") . "<br>";
echo gpaPoint("A") . "<br>";
echo gpaPoint("B-") . "<br>";
echo gpaPoint("F") . "<br>";
echo gpaPoint("E") . "<br>";