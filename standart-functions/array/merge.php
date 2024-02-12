<?php

/*
Злиття одного або більше масивів
*/

$nums = [1, 5, 6, 7, 9, 14, 21];
$letters = ['a' => 'hello', 'b' => 12, 'f' => 20, 'h' => 40, 'k' => 'hi'];
$symbols = ['ツ', '♫', '☁', 21];
$newLetters = ['a' => 'hello_2', 'c' => 'by'];

$result = array_merge($nums, $letters, $symbols, $newLetters);

echo "<pre>";
print_r($result);
echo "</pre>";