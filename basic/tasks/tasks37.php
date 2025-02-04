<?php

// task 1
$names = ['Nadiia', 'Vadym', 'Tetiana'];

echo "<b>Task 1:</b><br><pre>";
var_dump(implode(", ", $names));
echo "</pre><hr>";

// task 2
$numbers = [1, 2, 3, 4];
$even = array_filter($numbers, fn($val) => $val % 2 === 0);

echo "<b>Task 2:</b><br><pre>";
var_dump($even);
echo "</pre><hr>";