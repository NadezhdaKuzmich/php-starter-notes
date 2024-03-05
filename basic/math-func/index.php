<?php

/*
Ці функції працюють із числами в діапазонах типів integer і float на 
вашій машині. Ці функції завжди доступні.
*/

$x = 38.85277;
// round - повертає округлене значення val із зазначеною точністю 
// (кількість цифр після коми). Остання може бути від'ємною або нулем.
echo round($x) . '</br>';    // 39
echo round($x, 2) . '</br>'; // 38.85

// ceil - округляє дріб у більший бік.
echo ceil($x) . '</br>';     // 39

// floor - повертає найближче менше ціле від value. Тип значення, що 
// повертається, залишається float, оскільки діапазон float більший за float.
echo floor($x) . '</br>';    // 38

// min|max - повертає найменше та найбільше значення відповідно.
echo min(20, 58, 45, 89);
echo "<br>";

echo max(20, 58, 45, 89);
echo "<br>";

// pow - зводить число в ступінь. Приймає два аргументи, де перший, 
// це число, яке потрібно піднести до степеня, а другий, сам ступінь.
$var = 5;
$var2 = 2;
echo pow($var, $var2);