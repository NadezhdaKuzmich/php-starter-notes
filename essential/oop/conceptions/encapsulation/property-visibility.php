<?php

/*
Області видимості:
1. public - доступ до властивості може отримати будь-хто.
2. protected - доступ до властивості може отримати тільки клас-спадкоємець.
3. private - доступ до властивості має тільки клас, у якому ця властивість розташована.
*/

class Human
{
  public $name = 'Nadiia';
  protected $friendsName = 'Vadim';
  private $secret = 'secret';

  public function getFriends()
  {
    return [$this->friendsName];
  }

  public function getSecret()
  {
    return $this->secret;
  }
}

$me = new Human();
var_dump([
  $me->name,
  // FATAL ERROR => рівень видимості "protected"
  // $me->friendsName,
  // FATAL ERROR => рівень видимості "private"
  // $me->secret
]);
// ВИСНОВОК: із зовні можна отримати ТІЛЬКИ "public"
echo '<br>';

var_dump([
  $me->name,
  $me->getFriends(), // works
  $me->getSecret(), // works
]);
/// Завдяки "$this" ми можемо підготувати + прокинути собі
/// захищені поля через публічний метод
echo '<br>';

class User1 extends Human
{
  public function getData()
  {
    return [
      $this->friendsName,
      // FATAL ERROR, приватна змінна не передалася в клас User
      // зараз, клас User не має такої змінної
      // $this->secret
    ];
  }
}

$user = new User1();
var_dump($user->getData());
echo '<br>';

class User2 extends Human
{
  private $secret = 'anotherSecret';

  public function getData()
  {
    return [
      $this->friendsName,
      $this->secret
    ];
  }
}

$user2 = new User2();
var_dump(
  $user2->getData(),
  $user2->getSecret() // secret
);
// ВИСНОВОК: приватна властивість не перезаписалася у спадкоємці
// Тому що по-суті, це 2 абсолютні різні властивості