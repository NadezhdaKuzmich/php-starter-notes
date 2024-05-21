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

// task 3
$date = "2022-02-22";

echo "<b>Task 3:</b><br>";
// t - кількість днів у зазначеному місяці: від 28 до 31.
echo '<i>First day:</i> ' . date("Y-m-01", strtotime($date)) . ' - <i>Last day:</i> ' . date("Y-m-t", strtotime($date));
echo "<hr>";

// task 4
echo "<b>Task 4:</b><br>";
// l - повне найменування дня тижня: від Sunday до Saturday.
// \t\h\e - 'the'
// S - англійський суфікс порядкового числівника дня місяця, 
// 2 символи st, nd, rd або th. Застосовується спільно з j.
// j - день місяця без ведучого нуля від 1 до 31.
echo date('l \t\h\e jS');
echo "<hr>";

// task 5
echo "<b>Task 5:</b><br>";
// checkdate - перевіряє коректність дати за григоріанським календарем:
var_dump(checkdate(2, 30, 2024));
echo "<br>";
var_dump(checkdate(2, 29, 2024));
echo "<hr>";

// task 6
// DateTime - вбудований клас, призначений для читання, запису, порівняння 
// та обчислення дати або часу, надає хороший об'єктно-орієнтований інтерфейс 
// для вирішення більшості завдань. Він здатний навіть обробляти тимчасові зони:
$fromDate = new DateTime('2022-02-24 04:12:51');
// $date->diff - повертає різницю між двома DateTime об'єктами:
$diffDate = $fromDate->diff(new DateTime('2024-05-21 11:10:00'));

echo "<b>Task 6:</b><br>";
echo 'Total days: ' . $diffDate->days . " => ";
echo $diffDate->y . ' years, ';
echo $diffDate->m . ' months, ';
echo $diffDate->d . ' days, ';
echo $diffDate->h . ' hours, ';
echo $diffDate->i . ' minutes, ';
echo $diffDate->s . ' seconds';