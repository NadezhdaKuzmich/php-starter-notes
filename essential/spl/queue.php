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

Queue - це колекція типу "Перший увійшов, перший вийшов" 
(First In, First Out або FIFO), яка дає змогу працювати 
тільки з найпершим значенням. Ітерація відбувається від 
початку до кінця з видаленням взятого елемента.
*/

$stack = new SplQueue();
$stack->enqueue(11);
$stack->enqueue(277);
$stack->enqueue(663);
$stack->enqueue(14);
$stack->enqueue(15);
$stack->enqueue(26);
$stack->enqueue(7);

echo '<pre>';
var_dump([
  $stack->dequeue(),
  $stack->dequeue(),
  $stack->dequeue(),
  $stack->dequeue(),
  $stack->dequeue(),
  $stack->dequeue(),
]);
echo '</pre>';