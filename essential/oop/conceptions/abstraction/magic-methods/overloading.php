<?php

/*
Перевантаження 
- можливість динамічно створювати властивості та методи.
- механізм ООП, який дає змогу динамічно працювати з 
неіснуючими властивостями/методами об'єкта.
Головне його завдання - гнучкість при роботі з даними/об'єктом.

Перевантаження в PHP здійснюється за допомогою таких магічних методів:
1. __get
2. __set
3. __unset
4. __isset
5. __call
6. __callStatic

Метод __set() буде виконано під час запису даних у недоступні 
(захищені або приватні) або неіснуючі властивості.

Метод __get() буде виконано під час читання даних із недоступних 
(захищених або приватних) або неіснуючих властивостей.
*/

class User
{
  private $login;
  private $password;

  public function __construct($login, $password)
  {
    $this->login = $login;
    $this->password = $password;
  }

  public function __set($name, $value)
  {
    if (!property_exists($this, $name)) {
      die('Такої властивості не існує');
    }

    $this->$name = htmlentities($value);
  }

  public function __get($name)
  {
    if (!property_exists($this, $name)) {
      die('Такої властивості не існує');
    }

    return html_entity_decode($this->$name);
  }
}

$user = new User('John', 'Qwerty085');

// Наочний приклад 1:
// FATAL ERROR - не буде, хоча я викликаю приватні властивості
// тому що зовні їх не видно
// а отже, я звертаюся до того, чого немає
// а значить - час викликати __get()
var_dump(
  $user->login,
  $user->password
);
echo '<br>';

// Наочний приклад 2:
// код так само працює, за тією самою логікою:
// немає властивості - викликаємо магічний метод __set()
$user->login = "<script>alert!alert!</script>";
$user->password = "Qwerty08135";
var_dump(
  $user->login,
  $user->password
);