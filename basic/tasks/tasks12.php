<?php

// task 1
$timestamp = strtotime('12-05-2024');
echo "<b>Task 1:</b><br>";
echo $timestamp . "<hr>";

// task 2
$toDate = time();
$fromDate = strtotime("2023-12-31");
$dayDiff = $toDate - $fromDate;

echo "<b>Task 2:</b><br>";
echo floor($dayDiff / (60 * 60 * 24)) . "<hr>";