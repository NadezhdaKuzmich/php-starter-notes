<?php

/*
Заповнення масиву значеннями
*/

$indexStart = -3;
$count = 5;
$value = 'PHP';

$result = array_fill($indexStart, $count, $value);

print_r($result);