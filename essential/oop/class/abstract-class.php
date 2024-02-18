<?php

/*
Абстрактний клас - це клас, який може містити абстрактні методи. 
Не можна створити об'єкт абстрактного класу.
*/

// Клас, який має приставку "abstract".
abstract class BaseUser
{
  protected $login;
  protected $password;

  public function __construct($login, $password)
  {
    $this->login = $login;
    $this->password = $password;
  }

  abstract public function getData();
}

class User extends BaseUser
{
  // Тепер, у спадкоємці нам потрібно реалізувати всі абстрактні методи
  // Інакше:
  // Fatal error: Class User містить 1 abstract method and therefore must be declared

  // Прибираємо приставку "abstract"
  public function getData()
  {
    return [
      $this->login,
      $this->password
    ];
  }
}

// OK
$user1 = new User('dozer111', 'asdasd');
var_dump($user1->getData());

// НЕ ок =>  Uncaught Error: Cannot instantiate abstract class BaseUser
// $user2 = new BaseUser('dozer112', 'asdasd');