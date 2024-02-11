<?php

/*
Типи параметрів і значення, що повертається
При оголошенні функції допускається вказувати типи параметрів і тип значення, що повертається.
function mySum (int $num_1, int $num_2): int 
{
  $result = $num_1 + $num_2;
  return $result;
}

Необов'язкові параметри:
Параметри можна оголосити як необов'язкові, надавши їм значення за замовчуванням. 
function mySum (int $num_1, int $num_2 = 2) : int 
{
  $result = $num_1 + $num_2;
  return $result;
}
mySum(5); // результат 7
*/

function concat(string $value1, string $value2, string $end = '!'): string
{
  return $value1 . ' ' . $value2 . $end;
}

function newLine(int $num = 1)
{
  for ($i = 0; $i < $num; $i++) {
    echo "<br>";
  }
}

echo concat('Hello', 'World', '???');
newLine(2);
echo concat('Привіт', 'Світ', ' ;)');
newLine(2);
echo concat('Cześć', 'Świat');