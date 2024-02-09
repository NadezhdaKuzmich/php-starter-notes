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
echo '<br>';