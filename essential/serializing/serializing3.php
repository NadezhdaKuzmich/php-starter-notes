<?php

// серіалізація через Serializable

// припустимо, у нас у класі є 2 методи + клас реалізує інтерфейс
// Пріоритет роботи
// __serialize()
// Serializable::serialize => не виконається

class User implements Serializable
{
  public $login;
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

  // виконається
  public function __serialize(): array
  {
    return [
      'login' => $this->login,
      'password' => $this->password,
      'age' => $this->age,
      'phone' => $this->phone
    ];
  }

  // виконається
  public function __unserialize(array $data): void
  {
    $this->login = $data['login'];
    $this->password = $data['password'];
    $this->age = $data['age'];
    $this->phone = $data['phone'];
  }

  // не виконається
  public function serialize()
  {
    die('не виконається');
  }

  // не виконається
  public function unserialize($serialized)
  {
    die('не виконається');
  }
}

$user = new User('hello123', 'qwerty', 123, '123-444-56');
$serializedData = serialize($user);

echo '<pre>';
var_dump(
  $serializedData,
  unserialize($serializedData)
);
echo '</pre>';