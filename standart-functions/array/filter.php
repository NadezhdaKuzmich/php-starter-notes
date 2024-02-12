<?php

/**
 * Фильтрация элементов массива с помощью callback-функции
 */

$nums = [
    1, 3, 6, 5, 7, 2, 9, 13, 14
];

$result = array_filter($nums, function($num) {
    if ($num % 2 == 0) {
        return true;
    }

    return false;
});


// вывод отфильтрованного массива
echo "<pre>";
print_r($result);
echo "</pre>";