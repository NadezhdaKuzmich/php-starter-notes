<?php

/*
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