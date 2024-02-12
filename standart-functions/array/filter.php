<?php

/*
Фільтрування елементів масиву за допомогою callback-функції
*/

$nums = [
    1,
    3,
    6,
    5,
    7,
    2,
    9,
    13,
    14
];

$result = array_filter($nums, function ($num) {
    if ($num % 2 == 0) {
        return true;
    }

    return false;
});

echo "<pre>";
print_r($result);
echo "</pre>";