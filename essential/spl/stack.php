<?php

/*
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