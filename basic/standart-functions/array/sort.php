<?php

/*
Сортування масивів
- sort - сортування у порядку зростання
- ksort - сортування за ключем
- asort - сортування за значенням

ksort та asort - сортують масив таким чином, що зберігаються відносини між ключами та значеннями
*/

$fruits = [
    'd' => 'lemon',
    'a' => 'orange',
    'b' => 'banana',
    'c' => 'apple'
];

ksort($fruits);

echo "<pre>";
print_r($fruits);
echo "</pre>";