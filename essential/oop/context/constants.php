<?php

/*
Константа - строго задане значення, яке не можна змінити.
У PHP константи – частина мови, яка є і поза ООП.
Константи викликаються за допомогою: ClassName::ConstName
або всередині класу: self::ConstName.

Оператор області видимості
Псевдозмінна :: дозволяє звертатися до інших цікавих речей, які неможливі через $this: 
Color::BLACK
*/

const X = 'const 1';
echo X . '<br>';

class A
{
  const X = 'const 2';
}

class B
{
  const X = 'const 3';
}

$a = new A();
echo $a::X . '<br>';

$b = new B();
echo $b::X . '<br>';


class Color
{
  // ключове слово const
  // + ім'я (все з великих букв (UPPER_CASE)!!)
  const BLACK = '#000';
  const WHITE = '#fff';
  const GOLD = '#FFD700';
  const RED = '#ff0000';
}

class Car
{
  public $mark;
  public $color;
}

$car1 = new Car();
$car1->mark = 'Toyota';
$car1->color = Color::BLACK;
echo '<pre>';
var_dump($car1);
echo '</pre>';

$car2 = new Car();
$car2->mark = 'Mazda';
$car2->color = Color::GOLD;
echo '<pre>';
var_dump($car2);
echo '</pre>';

class Auto
{
  const BMW = 'BMW';
  const AUDI = 'AUDI';
  const Bugatti = 'Bugatti';

  public $name;

  public function imagine()
  {
    switch ($this->name) {
      case Auto::BMW:
        return Color::GOLD;
      case Auto::AUDI:
        return Color::WHITE;
      case Auto::Bugatti:
        return Color::RED;
      default:
        return Color::BLACK;
    }
  }
}

$auto = new Auto();
$auto->name = Auto::AUDI;
var_dump($auto->imagine());