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
echo "<hr>";

// task 7
$monthNum = 7;

// mktime - повертає тимчасову мітку Unix відповідно до 
// переданих аргументів або false, якщо тимчасову мітку 
// не можна представити у вигляді цілого числа PHP.
// F - повне найменування місяця, від January до December:
$monthName = date("F", mktime(0, 0, 0, $monthNum, 10));

echo "<b>Task 7:</b><br>";
echo $monthName;
echo "<hr>";

// task 8
$dt = new DateTime();
/*
- DateTime::sub - віднімає дні, місяці, роки, години, 
хвилини і секунди з об'єкта DateTime.
- DateTime::format - повертає дату, відформатовану згідно 
з переданим форматом.

- DateInterval -  представляє інтервали дат. Інтервал дат 
зберігає або певний фіксований час (у роках, місяцях, 
днях, годинах тощо), або відносний рядок часу у форматі, 
який підтримують конструктор DateTimeImmutable і DateTime:
P - Period - Початок періоду часу
Y - Year - Рік
M - Month - Місяць
D - Day - День
T - Time - Початок подання об'єкта часу
H - Hour - Години
M - Minute - Хвилини
S - Secunde - Секунди
Єдиний обов'язковий покажчик - P, усі інші опціональні.
*/
$dt->sub(new DateInterval('P1D'));
echo "<b>Task 8:</b><br>";
echo $dt->format('F j, Y');
echo "<hr>";

// task 9
// date_default_timezone_set - встановлює часовий пояс за 
// замовчуванням для всіх функцій дати/часу в скрипті:
date_default_timezone_set('America/Los_Angeles');
echo "<b>Task 9:</b><br>";
$date = date('m/d/Y h:i:s a', time());
echo $date . "<br>";

date_default_timezone_set('Europe/Warsaw');
$date = date('m/d/Y h:i:s a', time());
echo $date . "<hr>";

// task 10
$date = '2024-07-05';
$timeStamp = strtotime($date);
// l - день тижня, повна назва текстом:
$dayOfWeek = date("l", $timeStamp);

echo "<b>Task 10:</b><br>";
if (($dayOfWeek == "Saturday") || ($dayOfWeek == "Sunday")) {
  echo $dayOfWeek . ' is weekend.';
} else {
  echo $dayOfWeek . ' is not weekend.';
}
echo "<hr>";