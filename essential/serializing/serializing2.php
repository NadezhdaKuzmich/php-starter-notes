<?php

// серіалізація через __serialize/__unserialize
class User
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

  public function __serialize(): array
  {
    return [
      'login'
    ];
  }

  public function __unserialize(array $data): void
  {
    $this->login = $data[0];
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