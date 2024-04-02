<?php

/*
Цикл - різновид керуючої конструкції у високорівневих мовах програмування, 
призначений для організації багаторазового виконання набору інструкцій.

Ітерація в програмуванні - організація обробки даних, за якої дії 
повторюються багаторазово, не призводячи при цьому до викликів самих себе.
Говорячи простими словами - це один крок циклу, який виконає всі вкладені 
інструкції і за умовою перейде до наступної ітерації.

Цикл із постумовою do-while.
Головна відмінність циклу while від do-while в тому, що do-while завжди 
виконується хоча б один раз, навіть якщо умова від початку хибна.

A do-while loop is used where your loop should execute at least one time.
For example, let’s consider a scenario where we want to take an integer 
input from the user until the user has entered a positive number. In this 
case, we will use a do-while as we have to run loop at-least once because 
we want input from user at-least once. This loop will continue running 
until the user enters a positive number.
*/

$i = 0;
do {
  echo $i++;
} while ($i < 0);
echo '<hr>';

$week = [
  'Понеділок',
  'Вівторок',
  'Середа',
  'Четвер',
  'П\'ятниця',
  'Субота',
  'Неділя'
];
$day = 0;

do {
  echo $week[$day] . "<br>";
  $day++;
} while ($day < count($week));
echo '<hr>';

$number = 5;
do {
  echo "Value of number is: $number <br>";
  $number++;
}
while ($number <= 9);