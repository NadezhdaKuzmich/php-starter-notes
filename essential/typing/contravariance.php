<?php

/*
Контраваріантність дозволяє дочірньому методу повертати менш конкретний тип,
ніж тип повернення його батьківського методу. У спадкоємці ми ніби зменшуємо 
уточнення інформації.
*/

// приклад контраваріантності
class С
{
  // public function getSomeThing(DateTime $q): object
  // {
  // }
}

class С2 extends С
{
  // public function getSomeThing(object $q): DateTime
  // {
  // }
}