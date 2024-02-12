<?php

/*
Зміна регістру рядка
- strtolower - перетворює рядок на нижній регістр
- strtoupper - перетворює рядок у верхній регістр
- ucwords - перетворює на верхній регістр перший символ кожного слова в рядку
- ucfirst - перетворює перший символ рядка у верхній регістр
*/

$string = 'PHP - Це найпоширеніша мова програмування... and some phrases in English';
$result = strtolower($string);
$result2 = strtoupper($string);
$result3 = ucwords($string);
$result4 = ucfirst($string);

$result5 = mb_strtolower($string);
$result6 = mb_strtoupper($string);

// doesn't work for:
// $result7 = mb_ucwords($string); // Call to unknown function: 'mb_ucwords'
// $result8 = mb_ucfirst($string); // Call to unknown function: 'mb_ucwords'

$result9 = mb_convert_case($string, MB_CASE_TITLE);

echo $result, '<br>', $result2, '<br>', $result3, '<br>', $result4, '<br>';
echo '<br>', $result5, '<br>', $result6, '<br>', $result9;