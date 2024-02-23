<?php

/*
Функції
- spl_autoload_register
- spl_object_id - унікальний ID об'єкта
- spl_object_hash - унікальний hash об'єкта
*/

class Person
{
  public $name;
  public $surname;

  public function __construct($name, $surname)
  {
    $this->name = $name;
    $this->surname = $surname;
  }
}

$person1 = new Person('name1', 'surname1');
$person2 = new Person('name2', 'surname2');
$person3 = new Person('name3', 'surname3');

echo '<pre>';
var_dump([
  [spl_object_id($person1), spl_object_hash($person1)],
  [spl_object_id($person2), spl_object_hash($person2)],
  [spl_object_id($person3), spl_object_hash($person3)],
]);
echo '</pre>';