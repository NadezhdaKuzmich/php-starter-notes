<?php

/*
Форматування рядка
- %s - розглядається як рядок
- %d - розглядається як ціле число
- %f - розглядається як число з плаваючою точкою
*/

$name = 'Nadiia';
$age = 27;
$height = 166.8;

$result = sprintf('Hi! My name is %s. I\'m %d. My height is %.1f cm.', $name, $age, $height);

echo $result;