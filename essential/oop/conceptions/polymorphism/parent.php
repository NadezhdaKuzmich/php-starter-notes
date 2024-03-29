<?php

/*
Поліморфізм
- Принцип ООП, що дає змогу обмежувати перевизначення властивостей і методів 
класу під кастомні завдання.
- Клас спадкоємець може використовувати/перевизначати батьківський метод
- ключове слово parent

Класичного перевантаження в PHP немає.
*/

class Animal
{
  public function getName($name)
  {
    return $name;
  }
}

class Dog extends Animal
{
  public function getName($name)
  {
    $name = parent::getName($name);
    return "I am good boy " . $name;
  }
}

class Alabay extends Dog
{
  public function getName($name)
  {
    $name = parent::getName($name);
    return str_replace('I am ', 'I am HUUUUUUUGE ', $name);
  }
}

$dog = new Dog();
echo $dog->getName('Tuzik') . '<br>'; // I am good boy Tuzik

$dog2 = new Alabay();
echo $dog2->getName('Aron'); // I am HUUUUUUUGE good boy Aron