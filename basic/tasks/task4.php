<?php

// task 1
$numbers = [
  'Milk' => 2,
  'Cheese' => 4,
  '7-up' => 3
];

echo '<pre>';
echo "<b>Task 1:</b><br>";
// asort - cортує масив у порядку зростання, зберігаючи асоціацію індексів.
asort($numbers);
print_r($numbers);

// arsort - cортує масив у порядку убування, зберігаючи асоціацію індексів.
arsort($numbers);
print_r($numbers);
echo '<hr>';

// task 2
$targetDays = mktime(0, 0, 0, 07, 05, 2024);
$today = time();

$differenceDays = $targetDays - $today;
$days = (int)($differenceDays / 86400);

echo "<b>Task 2:</b><br>";
echo "Days till next birthday: $days days!";
echo '<hr>';
echo '</pre>';