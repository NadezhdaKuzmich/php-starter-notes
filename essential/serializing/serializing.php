<?php

/*
Серіалізація 
- можливість зберегти об'єкт у вигляді рядка.
- механізм мови PHP, який дає змогу перетворити об'єкт на рядок.
Десеріалізація 
- можливість із рядка відтворити об'єкт.
- механізм мови PHP, який дозволяє перетворити рядок на PHP
об'єкт.

У-пакувати (Серіалізація) ====> Роз-пакувати (Десеріалізація)

Є різні способи серіалізації/десеріалізації об'єкта:
1. __sleep/__wakeup - Deprecated
- Classes that implement this interface no longer support __sleep() and __wakeup().

2. Serializable - Deprecated
- As of PHP 8.1.0, a class which implements Serializable without also implementing 
__serialize() and __unserialize() will generate a deprecation warning.

3. __serialize/__unserialize 
*/

class User
{
  public $password;
  public $age;
  public $phone;

  public function __construct($login, $password, $age = null, $phone = null)
  {
    $this->login = $login;
    $this->password = $password;
    $this->age = $age;
    $this->phone = $phone;
  }

  // // має повернути масив з іменами всіх змінних цього об'єкта, які мають бути серіалізовані
  // public function __sleep() // Deprecated
  // {
  //   return [
  //     'login',
  //     'age',
  //     'phone'
  //   ];
  // }

  // // робить додаткові дії над об'єктом, які можуть знадобиться під час "десеріалізації"
  // // прик: відновити доступ до бази, ...
  // public function __wakeup() // Deprecated
  // {
  //   $this->password = 123;
  // }
}

// $user = new User('hello123', 'qwerty', 123, '123-444-56');
// $s = serialize($user);
// $s2 = unserialize($s);

// echo "<pre>";
// var_dump(
//   $s,
//   $s2
// );
// echo "</pre>";