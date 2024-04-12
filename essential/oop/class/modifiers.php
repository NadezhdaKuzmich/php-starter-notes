<?php

/*
Access modifiers provide access control for the method or property 
to which they are applied.

- public - 
Declaring a method or a property as public allows the method or 
property to be accessed by:
- The class that declared it.
- The classes that inherits from the declared class.
- Any external objects, classes, or code outside the class hierarchy.

- private -
Declaring a method or a property as private allows the method or 
property to be accessed by:
- Only the class that declared it.
A private method or property is only visible and accessible within the 
class that created it.

- protected -
Declaring a method or a property as protected allows the method or 
property to be accessed by:
- The class that declared it.
- The classes that inherits from the declared class.
This does not allow external objects, classes, or code outside the 
class hierarchy to access these methods or properties. An error occurs 
if they try to access it.
*/

class Car
{
  public $name = " ";
  private $plateNumber;
  protected $power = 2500;

  public function __construct($name, $number)
  {
    $this->name = $name;
    $this->plateNumber = $number;
  }

  public function display()
  {
    echo "Name: $this->name";
  }

  public function setPlateNumber($number)
  { //sets value of property plateNumber
    $this->plateNumber = $number;
  }

  public function getPlateNumber()
  { //returns the property "plateNumber"
    return $this->plateNumber;
  }
}

$obj1 = new Car("BMW", 68775);
echo "Name: " . $obj1->name;
echo "<br>";
echo "Plate number: " . $obj1->getPlateNumber();
echo "<br>";
$obj1->setPlateNumber(47798);
echo "Plate number: " . $obj1->getPlateNumber();
echo "<hr>";

$obj2 = new Car("Mercedes", 89976);
echo $obj2->display();
echo "<br>";
echo "Plate number: " . $obj1->getPlateNumber();
echo "<hr>";

class Test
{
  private $privateM = 1;
  protected $protectedM = 2;

  public function increase(Test $test)
  {
    $test->privateM *= 10;
    $test->protectedM *= 10;
  }

  public function __toString()
  {
    return "privateMember = " . $this->privateM . ", protectedMember = " . $this->protectedM;
  }
}

$test1 = new Test();
$test2 = new Test();
echo "before test1: $test1<br>";
$test2->increase($test1);
echo "after test1: $test1<br>";