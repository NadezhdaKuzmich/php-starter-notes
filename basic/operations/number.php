<?php

/*
Арифметичні оператори

1. *, /, % operators have equal precedence.
2. + , - operators have equal precedence.
3. *, / , % have a higher precedence than + , -.

Operations will be evaluated in the following order:
1.Any operation wrapped in parentheses (())
2. Exponents (**)
3. Multiplication (*) and division (/)
4. Addition (+) and subtraction (-).

The acronym PEMDAS can be helpful for remembering the 
order of precedence for these arithmetic operations.

- Left associativity occurs when an expression is evaluated 
from left to right. For example * and / have the same 
precedence and their associativity is left to righ.

- Right associativity occurs when an expression is evaluated 
from right to left. Like most programming languages, 
"=" and "print" in PHP have right associativity.

Thus, precedence and associativity are two characteristics 
of operators that determine the evaluation order of 
subexpressions in absence of brackets.

Operation:	   Long Syntax:	   Short Syntax:
- Add	-        $x = $x + $y	     $x += $y
- Subtract -   $x = $x - $y	     $x -= $y
- Multiply -   $x = $x * $y	     $x *= $y
- Divide -     $x = $x / $y	     $x /= $y
- Mod -        $x = $x % $y	     $x %= $y
*/

// Додавання
$sum = 5 + 5;
echo 'Додавання: 5 + 5 = ' . $sum;
echo '<br>';

// Віднімання
$sub = 7 - 2;
echo 'Віднімання: 7 - 2 = ' . $sub;
echo '<br>';

// Множення
$mult = 3 * 9;
echo 'Множення: 3 * 9 = ' . $mult;
echo '<br>';

// Поділ
$div = 21 / 3;
echo 'Поділ: 21 / 3 = ' . $div;
echo '<br>';

// Залишок від ділення
$modulo = 13 % 3;
echo 'Залишок від ділення: 13 % 3 = ' . $modulo;
echo '<br>';

// Зведення у ступінь
$exp = 2 ** 5;
echo 'Зведення у ступінь: 2 ** 5 = ' . $exp;
echo '<br>';

/*
Пріоритет арифметичних операторів
*/

$example1 = (5 + 2) * 2;
echo '<br>';
echo 'Приклад 1. (5 + 2) * 2 = ' . $example1;
echo '<br>';

$example2 = (5 + 2) / (24 - 2);
echo 'Приклад 2. (5 + 2) / (24 - 2) = ' . $example2;
echo '<br>';

$example3 = ((9 + 5 - 2) / 3) ** 2;
echo 'Приклад 3. ((9 + 5 - 2) / 3) у ступені 2 = ' . $example3;
echo '<br>';

/*
Інкремент та декремент
*/

// префіксний інкремент
$a = 5;
echo '<br>';
echo '++$a, повинно бути 6: ' . ++$a . '<br />';
echo '$a, повинно бути 6: ' . $a . '<br />';
echo '<br>';

// постфіксний інкремент
$b = 5;
echo '$b++, повинно бути 5: ' . $b++ . '<br />';
echo '$b, повинно бути 6: ' . $b . '<br />';
echo '<br>';

// префіксний декремент
$c = 5;
echo '--$c, повинно бути 4: ' . --$c . '<br />';
echo '$c, повинно бути 4: ' . $c . '<br />';
echo '<br>';

// постфіксний декремент
$d = 5;
echo '$d--, повинно бути 5: ' . $d-- . '<br />';
echo '$d, повинно бути 4: ' . $d . '<br />';
echo '<br>';

// Зміна знака
$var = 10;
$var = -$var;
echo $var . '<br>';

// operators will return integers whenever the result 
// of the operation evaluates to a whole number
echo 8.9 + 1.1 . '<br>';

$num_cookies = 24;
$num_friends = 7;
$cookies_per_friend = $num_cookies / $num_friends;
echo $cookies_per_friend;