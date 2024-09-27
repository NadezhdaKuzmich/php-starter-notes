<?php

// task 1
echo "<b>Task 1:</b><br>";
echo 'Current PHP version: ' . phpversion();
echo "<hr>";

// task 2
class Fruit
{
  public $name;
  public $color;

  function setName($name)
  {
    $this->name = $name;
  }
  function getName()
  {
    return $this->name;
  }
}

$apple = new Fruit();
$banana = new Fruit();
$apple->setName('Apple');
$banana->setName('Banana');

echo "<b>Task 2:</b><br>";
echo $apple->getName();
echo "<br>";
echo $banana->getName();
echo "<hr>";