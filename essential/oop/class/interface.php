<?php

/*
Інтерфейс
- Окрема конструкція мови.
- Може містити тільки сигнатури публічних методів (public, static), 
або константи. 
- Сутність, що містить тільки абстрактні методи.
- Дає змогу виділити загальну ідею без реалізації.
*/

interface ICalculator
{
  public function calculate($x, $y);
}

// В абстрактному класі не треба реалізовувати методи інтерфейсу
abstract class Calculator implements ICalculator
{
}

class Summary extends Calculator
{
  public function calculate($x, $y)
  {
    echo "sum: $x + $y = " . $x + $y;
  }
}

$sum = new Summary();
echo $sum->calculate(2, 3) . "<br>";

// В всередині звичайного класу ОБОВ'ЯЗКОВЕ 
// перевизначення методів інтерфейсу
interface Storage
{
  public function save();
  public function delete();
}

// implements
class FileStorage implements Storage
{
  public function save()
  {
    echo "save";
  }

  public function delete()
  {
    echo "delete";
  }
}

$storage = new FileStorage();
echo $storage->save() . "<br>";

// кілька інтерфейсів з одним класом
interface NewStorage
{
  public function save();
  public function delete();
}

interface Identity
{
  public function getIdentity();
}

interface Cache
{
  public function getOrSet();
}

// ОБОВ'ЯЗКОВЕ перевизначення ВСІХ методів кожного інтерфейсу всередині
class NewFileStorage implements NewStorage, Identity, Cache
{
  public function save()
  {
    echo "save";
  }

  public function delete()
  {
    echo "delete";
  }

  public function getIdentity()
  {
    echo 'getIdentity';
  }

  public function getOrSet()
  {
    // нам не обов'язково щось робити всередині методу
    // інтерфейс "змушує" нас, щоб цей метод у класі був
    // а що всередині - це вже питання інше
  }
}

$storage = new NewFileStorage();
echo $storage->getIdentity() . "<br>";

// успадкування інтерфейсів
interface A
{
  public function getA();
}
interface B extends A
{
  public function getB();
}

class X implements B
{
  public function getA()
  {
  }
  public function getB()
  {
  }
}

// множинне успадкування інтерфейсів
// єдине "чисте" успадкування в PHP
interface First
{
  public function getFirst();
}

interface Second
{
  public function getSecond();
}

// з класами такий трюк не прокотить
interface Third extends First, Second
{
}

class SomeClass implements Third
{
  public function getFirst()
  {
  }

  public function getSecond()
  {
  }
}