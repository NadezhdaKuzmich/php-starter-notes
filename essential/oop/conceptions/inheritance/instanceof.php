<?php

/*
Оператор instanceof визначає, чи належить збережений 
у PHP-змінній об'єкт до конкретного класу.
*/
class Human
{
}
class NotHuman
{
}

$var1 = new Human();
$var2 = new NotHuman();
$var3 = new Human();

var_dump([
  $var1 instanceof Human,
  $var2 instanceof Human,
  $var1 instanceof $var3
]);
echo '<br>';

// instanceof покаже, що об'єкт класу спадкоємець не тільки свого 
// класу, а й усіх класів, які знаходяться "вище" за ієрархією
class SuperHuman extends Human
{
}
class MegaHuman extends SuperHuman
{
}

$me = new Human();
$tonyStark = new MegaHuman();

var_dump([
  $me instanceof Human, // true
  $me instanceof SuperHuman, // false
  $me instanceof MegaHuman, // false
]);
echo '<br>';

var_dump([
  $tonyStark instanceof Human, // true
  $tonyStark instanceof SuperHuman, // true
  $tonyStark instanceof MegaHuman, // true
]);
echo '<br>';