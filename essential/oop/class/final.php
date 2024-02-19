<?php

/*
PHP5 надає ключове слово final, розмістивши яке перед оголошеннями методів класу, 
можна запобігти їх перевизначенню в дочірніх класах. Якщо ж сам клас визначається 
з цим ключовим словом, то він не зможе бути успадкований.
*/

class Animal
{
  // final для методу забороняє його перевизначення в підкласах
  final public function makeSound()
  {
    echo "Some generic animal sound";
  }
}

// Спроба створення підкласу, який успадковується від Animal
class Dog extends Animal
{
  // Спроба перевизначення final-методу призведе до помилки
  // public function makeSound()
  // {
  //   echo "Woof! Woof!";
  // }
}

final class First
{
}

// Fatal error: Class Second cannot extend final class
// class Second extends First
// {
// }