<?php

/*
Парадигма – підхід до написання програми.
ООП – об'єктно-орієнтована парадигма проектування. В центрі уваги -
об'єкти та класи.

Клас - шаблон
Властивість – характеристика класу.
Метод – функція класу.
Об'єкт (екземпляр класу) - конкретна реалізація; щось створене з 
рахуванням шаблона. Об'єкти створюються за допомогою конструкції 
мови new, наприклад: new User.

У PHP є багато можливостей для роботи з класом:
- Інтерфейс
- Трейт
- Приставки abstract/final

Classes are the blueprints of objects. One of the big differences 
between functions and classes is that a class contains both data 
(variables) and functions to form a package. A class is a user-defined 
data type, which includes local methods and local variables.

An object is an individual instance of the data structure defined by a 
class. We define a class once and then make many objects that belong 
to that class.

Objects, in PHP, are divided into two parts:
1. property - is essentially the variables inside the class or object.
2. method - refer to the functions inside the class or object.

Classes and Objects are used to make your code more efficient and less 
repetitive by grouping similar tasks. A class is used to define the 
actions and data structure used to build objects. The objects are then 
built using this predefined structure.
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
class Human1
{
  public $name;    //null
  public $surname; //null
  public $age = 0; //0

  public function sayHello()
  {
    return "Hello!";
  }
}

$user = new Human1();
$user->name = "Nadiia";
$user->surname = "Kuzmich";
$user->age = 27;

echo "Username -> $user->name <br>";
echo $user->sayHello() . "<hr>";

// шаблон Pet
class Pet
{
  public $name;
  public $age = 0;
}

$cat = new Pet();
print_r($cat->age);
echo "<br>";

$cat->name = "Businka";
$cat->age = 4;

print_r([$cat->name, $cat->age]);
echo "<hr>";

// шаблон Player
class Player
{
  public $name;
  public $lastName;
  public $nickName;

  public function getFullName()
  {
    return $this->name . " (" . $this->nickName . ") " . $this->lastName;
  }
}

$player = new Player();
$player->name = "Nadiia";
$player->lastName = "Kuzmich";
$player->nickName = "Speranza";
$playerFullName = $player->getFullName();

echo "Now I am taking interview with " . $playerFullName;
echo "<hr>";

class Shape
{

  public $sides = 0;
  public $name = " ";

  public function description()
  {
    echo "A $this->name with $this->sides sides.";
  }
}

$myShape1 = new Shape;
$myShape1->sides = 3;
$myShape1->name = "triangle";
$myShape1->description();
echo "<br>";

$myShape1->sides = 4;
$myShape1->name = "square";
$myShape1->description();
echo "<br>";

$myShape1->sides = 6;
$myShape1->name = "hexagon";
$myShape1->description();