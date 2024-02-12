<?php

/*
Видалення пробілів або інших символів з рядка
- trim - видалення з початку та кінця
- ltrim – видалення з початку
- rtrim – видалення з кінця
*/

$str = '+++Це кілька слів+';

$result = trim($str, '+');
$result2 = ltrim($str, '+');
$result3 = rtrim($str, '+');

echo "<pre>";
echo $str, "<br>";
echo $result, "<br>";
echo $result2, "<br>";
echo $result3, "<br>";
echo "</pre>";