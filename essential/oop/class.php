<?php

/*
Парадигма – підхід до написання програми.
ООП – об'єктно-орієнтована парадигма проектування. В центрі уваги -
об'єкти та класи.

Клас - шаблон
Властивість – характеристика класу.
Метод – функція класу.
Об'єкт (екземпляр класу) - конкретна реалізація; щось створене з урахуванням шаблона
Об'єкти створюються за допомогою конструкції мови new, наприклад: new User.
*/

// Порядок дій:
// 1. Створити клас
// 2. Створити необхідні нам екземпляри класу
// шаблон кота
class Cat
{
}

// шаблон змії
class Snake
{
}

// екземпляр класу Cat
$murzik = new Cat();

// екземпляр класу Snake
$anaconda = new Snake();

// шаблон Human
class Human
{
  public $name;    //null
  public $surname; //null
  public $age = 0; //0

  public function sayHello()
  {
    return "Hello!";
  }
}

$user = new Human();
$user->name = "Nadiia";
$user->surname = "Kuzmich";
$user->age = 27;

echo "Username -> $user->name <br>";
echo $user->sayHello() . '<br>';

// шаблон Pet
class Pet
{
  public $name;
  public $age = 0;
}

$cat = new Pet();
print_r($cat->age);
echo '<br>';

$cat->name = 'Businka';
$cat->age = 4;

print_r([$cat->name, $cat->age]);
echo '<br>';

// шаблон Player
class Player
{
  public $name;
  public $lastName;
  public $nickName;

  public function getFullName()
  {
    return $this->name . ' (' . $this->nickName . ') ' . $this->lastName;
  }
}

$player = new Player();
$player->name = 'Nadiia';
$player->lastName = 'Kuzmich';
$player->nickName = 'Speranza';
$playerFullName = $player->getFullName();

echo 'Now I am taking interview with ' . $playerFullName;