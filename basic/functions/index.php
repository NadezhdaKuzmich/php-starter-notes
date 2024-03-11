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
hi();
// HI();

function sayHello()
{
  echo "Привіт світ!";
}

function hi()
{
  sayHello();
}

echo '<hr>';

// $var = 'hello';

// function giveError()
// {
//   echo $var; // Warning: Undefined variable $var
// }
// giveError();

/*
Анонімна функція - користувацька функція без іменного ідентифікатора. 
Зазвичай використовується для обробки локальних даних або як callback 
function.
*/

$anonymous = function ($x, $y) {
  return [$x, $y];
};

print_r($anonymous('a', 'b'));
echo '<hr>';

$anonymousFunction = function ($text) {
  echo $text;
};

$anonymousFunction(':)');