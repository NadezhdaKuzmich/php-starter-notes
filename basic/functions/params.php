<?php

/*
Параметри та аргументи функції
Параметр функції – це змінна у функції, яка міститиме вхідне значення, 
що передається зовні.
Аргумент функції – значення та змінні функції, що передаються під час 
виклику. Параметри, що передаються у функцію.

PHP allows us to pass arguments into a function in two ways:
1. Pass by Value
- On passing arguments using pass by value, the value of the argument 
gets changed within a function, but the original value outside the 
function remains unchanged. That means a duplicate of the original 
value is passed as an argument.
2. Pass by Reference

$text= 'some_text';
$ arr = [5, 10, 8];
myFunction($text, $arr, 5);
*/

function myFunction($num1, $num2)
{
  echo "The value assigned to num1 is $num1<br>";
  echo "The value assigned to num2 is $num2<hr>";
}

myFunction(3, 4);

function concat($value1, $value2)
{
  return $value1 . ' ' . $value2 . '!';
}

$name = 'Nadiia';
$secondName = 'Kuzmich';

echo concat($name, $secondName) . '<br>';
echo concat('Vadym', 'Sokolov') . '<hr>';

function cube($num1)
{ //num1 parameter passed by value here
  return $num1 * $num1 * $num1;

}

$answer = cube(3);
echo $answer . '<hr>';

function swap(&$arg1, &$arg2)
{ //parameters num1 and num2 passed using pass by reference method
  $temp = $arg2;
  $arg2 = $arg1;
  $arg1 = $temp;

}

$num1 = 4;
$num2 = 5;
swap($num1, $num2);
echo "num1 is: $num1 <br>";
echo "num2 is: $num2 <hr>";