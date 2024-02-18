<?php

/*
пріоритет трейтів
оскільки трейт "навішує" поверх наявних властивостей/методів, 
ще й свої класи/методи, то(якщо не позначено в коді іншого):
1. спочатку класу проставляються властивості/методи трейта 
2. Потім клас ініціалізує свої рідні властивості/методи
*/

// приклад 1
trait Name
{
  public $name = 'John';
}

class Person
{
  use Name;
  // помилка, властивість існує
  // public $name = 'Anybody';

}

$person = new Person();
echo $person->name . "<br>";

// приклад 2
trait A2
{
  public function getData()
  {
    return 'Some data';
  }
}

class B2
{
  use A2;

  public function getData()
  {
    return 'New data';
  }
}

$q = new B2();
echo $q->getData() . "<br>"; // 222 => клас перезаписав метод трейта

// методи з поточного класу перевизначають методи трейта,
// які зі свого боку перевизначають методи з базового класу.
class Hello
{
  public function sayHello()
  {
    return "Hello friend";
  }
}

trait SayWorld
{
  public function sayHello()
  {
    // якби ми тут не виконали parent, трейт би просто перезаписав
    // батьківську реалізацію на свою
    return parent::sayHello() . ', also hello from trait';
  }
}

class MyHelloWorld extends Hello
{
  use SayWorld;
}

$o = new MyHelloWorld();
echo $o->sayHello();  // Hello friend, also hello from trait