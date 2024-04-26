<?php

// getrandmax
echo getrandmax() . '<hr>';  // 2147483647

// rand
echo rand() . '<hr>';        // 0 - 2147483647
echo rand(1, 10) . '<hr>';   // 1 - 10

$min = 12;
$max = 222;
echo rand($min, $max) . '<hr>';   // $min - $max