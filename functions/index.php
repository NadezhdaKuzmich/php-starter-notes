<?php

/*
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

// $var = 'hello';

// function giveError()
// {
//   echo $var; // Warning: Undefined variable $var
// }
// giveError();