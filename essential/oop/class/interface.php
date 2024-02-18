<?php

/*
Інтерфейс - сутність, що містить тільки абстрактні методи.
- Окрема конструкція мови.
- Може містити тільки сигнатури публічних методів, або константи.
*/

interface Storage
{
  public function save();
  public function delete();
}

class FileStorage implements Storage
{
  // ОБОВ'ЯЗКОВЕ перевизначення
  // методів інтерфейсу всередині
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