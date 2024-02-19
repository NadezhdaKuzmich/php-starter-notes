<?php

/*
Клонування
У PHP присвоєння змінній об'єкта відбувається як присвоєння за посиланням. 
Іноді буває необхідно у змінну присвоїти точну копію об'єкта, щоб нова змінна 
під час зміни внутрішнього стану не торкнулася внутрішнього стану старої змінної. 
Для цього в PHP є механізм клонування об'єкта

- Клонування - механізм мови, який через спеціальне слово clone робить копію об'єкта.
- По-default-у clone повністю копіює внутрішній стан об'єкта, якщо потрібно при 
клонуванні зробити щось (прик: прибрати якісь дані з клону), використовується 
магічний метод __clone.
*/

class Customer
{
  public $name;
  public $sur;

  public function __construct($name, $sur)
  {
    $this->name = $name;
    $this->sur = $sur;
  }
}

$user1 = new Customer('Nadiia', 'Kuzmich');

$user2 = $user1;
$user2->name = 'Name';
echo "user1->name: $user1->name. user2->name: $user2->name." . "<br>";

// нове ключове слово "clone"
$user1->name = "Nadiia";
$user3 = clone $user1;
$user3->name = 'New Name';
$user3->sur = 'New Surname';
echo "user1->name: $user1->name. user3->name: $user3->name.";
// ВИСНОВОК:
// клонування об'єкта дає нам "копію", а не "посилання" об'єкта

class User
{
  const STATUS_REGISTERED = 1;
  const STATUS_NOT_REGISTERED = 2;

  public $name;
  public $sur;
  protected $status;

  public function __construct($name, $sur)
  {
    $this->name = $name;
    $this->sur = $sur;
    $this->status = self::STATUS_REGISTERED;
  }

  public function __clone()
  {
    $this->status = self::STATUS_NOT_REGISTERED;
  }
}

$user1 = new User('Nadiia', 'Kuzmich');

$user2 = clone $user1;
$user2->name = 'Name';
$user2->sur = 'Surname';

echo '<pre>';
var_dump([$user1, $user2]);
echo '</pre>';