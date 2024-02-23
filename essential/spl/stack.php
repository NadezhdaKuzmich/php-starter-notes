<?php

/*
Standard PHP Library 
- стандартна бібліотека PHP. Вона має низку класів і функцій, 
які написані мовою C++.
- набір базових реалізацій структур даних, ітераторів, інтерфейсів, 
винятків і функцій.
- з'явилася у версії PHP 5.0.0
- PHP 5.3.0 постачається з ядром. Вона вбудована в ядро, відповідно 
будь-хто, хто встановив собі PHP на комп'ютер, може використовувати SPL.

Класи/структури даних:
ArrayObject
- ООП обгортка для масивів
SplFixedArray
- реалізація фіксованого масиву
SplStack
- реалізація стека
SplQueue
- реалізація черги
- SplMaxHeap/SplMinHeap
- реалізація купи

Винятки
InvalidArgumentException
- неправильний аргумент функції
DomainException
- помилка доменного шару програми
LogicException
- логічна помилка
RuntimeException
- помилка, яку можна отримати здебільшого під час роботи програми
BadMethodCallException
- неправильне використання методу

Функції
- spl_autoload_register
- spl_object_id - унікальний ID об'єкта
- spl_object_hash - унікальний hash об'єкта

Stack - це колекція типу "Останній увійшов, перший вийшов" 
(Last In, First Out або LIFO), яка дає змогу працювати тільки 
з найбільш верхнім (останнім) значенням. Ітерація відбувається 
від кінця до початку з видаленням взятого елемента.
*/

$stack = new SplStack();
$stack->push(11);
$stack->push(277);
$stack->push(663);
$stack->push(14);
$stack->push(15);
$stack->push(26);
$stack->push(7);

echo '<pre>';
var_dump([
  $stack->pop(),
  $stack->pop(),
  $stack->pop(),
  $stack->pop(),
  $stack->pop(),
  $stack->pop(),
]);
echo '</pre>';