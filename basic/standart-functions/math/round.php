<?php

/*
Округлення числа з плаваючою точкою до цілого
- round - заокруглює число типу float
- ceil - округляє дріб у велику сторону
*/

$num = 3.4;

echo $num . ' округлено до ' . round($num), '<br>';
echo $num . ' округлено до ' . ceil($num);