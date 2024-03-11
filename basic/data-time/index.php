<?php

/*
- UNIXTIME мітка - кількість секунд з 1 січня 1970 року.
- time(), mktime() і strtotime() повертають час в UNIXTIME форматі.
- date() повертає час у заданому форматі.
- class DateTime - сутність, що працює з датою і часом, з можливістю
форматувати виведення даних.

Функції time() і mktime()
Відмінність time() від mktime() у тому, що mktime() повертає 
мітку для вказаної дати.
*/
echo time();
echo '<hr>';
echo mktime(8, 5, 20, 5, 7, 2010);
echo '<hr>';

/*
Функції date() і strtotime()
strtotime() так само повертає Unixtime, але конвертує її зі 
словесної форми, date() - повертає дату в зазначеному форматі 
та приймає формат Unixtime.
*/
echo strtotime('yesterday');
echo '<hr>';
echo date('H:i:s d.m.Y', mktime(8, 5, 20, 5, 7, 2010));
echo '<hr>';

/*
Клас Datetime - клас, що працює з часом.
*/
$dateTime = new DateTime();
echo $dateTime->getTimestamp();
echo '<hr>';
$dateTime->setDate(2020,7,05);
$dateTime->setTime(9,3,19);
echo $dateTime->format('Y-m-d H:i:s');
echo '<hr>';