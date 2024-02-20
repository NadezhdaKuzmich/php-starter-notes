<?php

/*
Коваріантність дозволяє дочірньому методу повертати більш конкретний 
тип, ніж тип повернення його батьківського методу. У спадкоємці ми 
ніби уточнюємо інформацію.
*/

// приклад коваріантності
class X
{
  // public function getSomeThing(): object
  // {
  // }
}

class X2 extends X
{
  // public function getSomeThing(): DateTime
  // {
  // }
}