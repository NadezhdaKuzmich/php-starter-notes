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

// task 3
$favcolor = "red";

echo "<b>Task 3:</b><br>";
switch ($favcolor) {
  case "red":
    echo "Your favorite color is red!";
    break;
  case "blue":
    echo "Your favorite color is blue!";
    break;
  case "green":
    echo "Your favorite color is green!";
    break;
  default:
    echo "Your favorite color is neither red, blue, nor green!";
}
echo "<hr>";

// task 4
$age = ["Peter" => "35", "Ben" => "37", "Joe" => "43"];
asort($age);

echo "<b>Task 4:</b><br>";
foreach ($age as $key => $value) {
  echo "$key => $value <br>";
}
echo "<hr>";