<?php

// серіалізація через Serializable

// припустимо, у нас у класі є 2 методи + клас реалізує інтерфейс
// Пріоритет роботи
// __serialize()
// Serializable::serialize => не виконається

class User implements Serializable
{
  protected $login;
  protected $password;
  protected $age;
  protected $phone;

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
      'key' => 'value'
    ];
  }

  // виконається
  public function __unserialize(array $data): void
  {
    $this->login = 'key';
  }

  // не виконається
  public function serialize()
  {
    return ['another key' => 'another value'];
  }

  // не виконається
  public function unserialize($serialized)
  {
    $this->age = 27;
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