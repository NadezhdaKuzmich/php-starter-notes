<?php

/*
Логічні операції
Вирази – це найважливіші будівельні елементи PHP. Майже все, що ви пишете в PHP, є виразом. 
Найпростіше і найточніше визначення виразу - "все що завгодно, що має значення".
Логічний вираз – вираз, який може набувати лише одне з двох значень, правда чи брехня.

Логічні операції призначені для роботи з логічними виразами та завжди повертають true або false.
• $a and $b  - І
• $aor$b     – АБО
• $a xor $b  - що виключає АБО
• !$a        - Заперечення
• $a&&$b     – І (більший пріоритет ніж and)
• $a||$b     – АБО (більший пріоритет ніж or)
*/

$positive = 5 > 1; // true
$negative = 3 === 2; // false

// логічне І
echo 'true and false ';
var_dump($positive and $negative);
echo '<br>';

// логічне АБО
echo 'true or false ';
var_dump($positive or $negative);
echo '<br>';

// що виключає АБО
echo 'true xor false ';
var_dump($positive xor $negative);
echo '<br>';

echo 'true xor true ';
var_dump($positive xor true);
echo '<br>';

// заперечення
echo ' !true ';
var_dump(!$positive);
echo '<br>';

// логічне І (більший пріоритет ніж and)
echo 'true && false ';
var_dump($positive && $negative);
echo '<br>';

echo 'true && false and true ';
var_dump($positive && $negative and true);
echo '<br>';

echo 'true && true and true ';
var_dump($positive && true and true);
echo '<br>';

// АБО (більший пріоритет ніж or)
echo 'true || true ';
var_dump($positive || $negative);
echo '<br>';

echo 'true || false or true ';
var_dump($positive || $negative or true);
echo '<hr>';

/*
Оператор рівності "==" призначений для порівняння значень двох змінних, при цьому необхідно пам'ятати 
про такі правила:
1. якщо одне значення null, а інше undefined - значення рівні.
2. якщо одне значення число, а друге рядок, то рядок перетворитися на число і проводитися порівняння.
3. якщо одне значення true, воно перетворюється на 1, якщо значення false, воно перетворюється на 0.
*/
$string = '1';
$num = 1;
$str1 = '2';
$bool = true;

var_dump($string == $num);
echo "<br>";
var_dump($string == $str1);
echo "<br>";
var_dump($num == $bool);
echo '<hr>';

// Ідентичність - вимагає збігу типу і значення змінної.
// Оператор ідентичності "===" призначений для перевірки значень двох змінних на ідентичність.
$string = '1';
$str1 = '1';
$num = 1;
$str2 = '2';
$bool = true;

var_dump($string === $num);
echo "<br>";
var_dump($string === $str1);
echo "<br>";
var_dump($num === $bool);
echo "<br>";
var_dump($string === $str2);
echo '<hr>';

// Не дорівнює
$a = 10;
$b = 20;
var_dump($a != $b);
echo '<hr>';