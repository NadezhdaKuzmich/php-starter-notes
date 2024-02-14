<?php

/*
Магічні методи в PHP ООП
Магічний метод – метод, який доступний у будь-якому класі, і викликається за певних умов.
Характерні особливості таких методів у PHP – вони починаються з __
*/

// Конструктор – магічний метод __construct, що викликається при створенні екземпляра класу.
// було
class User0
{
  public $name;
  public $age;

  public function create($name, $age)
  {
    $this->name = $name;
    $this->age = $age;
  }
}

$user = new User0();
$user->create("Nadiia", 27);

// стало
class User
{
  public $name;
  public $age;

  public function __construct($name, $age)
  {
    $this->name = $name;
    $this->age = $age;
  }
}

$user = new User("Nadiia", 27);
var_dump([
  $user->name,
  $user->age
]);