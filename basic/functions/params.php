<?php

/*
Параметри та аргументи функції
Параметр функції – це змінна у функції, яка міститиме вхідне значення, що передається зовні.
Аргумент функції – значення та змінні функції, що передаються під час виклику. Параметри, що 
передаються у функцію.
$text= 'some_text';
$ arr = [5, 10, 8];
myFunction($text, $arr, 5);
*/

function concat($value1, $value2)
{
  return $value1 . ' ' . $value2 . '!';
}

$name = 'Nadiia';
$secondName = 'Kuzmich';

echo concat($name, $secondName) . '<br>';
echo concat('Vadym', 'Sokolov');