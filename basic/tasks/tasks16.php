<?php

// task 1
echo "<b>Task 1:</b><br>";
echo round(1.65, 1, PHP_ROUND_HALF_UP) . '<br>';     // Rounds up to nearest even number: 1.7
echo round(1.65, 1, PHP_ROUND_HALF_DOWN) . '<br>';   // Rounds down to nearest even number: 1.6
echo round(-1.54, 1, PHP_ROUND_HALF_EVEN) . '<hr>';  // Rounds to nearest even number: -1.5

// task 2
// getrandmax - повертає максимально можливе випадкове число.
// rand - повертає псевдовипадкове ціле число в діапазоні від 
// 0 до значення, яке повертає функція getrandmax, якщо функцію 
// викликали без параметрів min і max:
$x = rand(10e12, 10e16);

echo "<b>Task 2:</b><br>";
// base_convert - перетворює числа між довільними системами числення:
echo base_convert($x, 10, 2) . '<hr>';