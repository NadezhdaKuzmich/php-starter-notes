<?php

/*
- this -
The pseudo-variable $this refers to a member of a class according 
to an instance of that class. It provides a reference to the calling 
object, that is the object to which the method or property belongs to. 
Note that the member of the class must be non-static.

The Object Operator:
The -> symbol is a built-in construct in PHP that is used with the $this 
keyword to access contained methods and properties.

- self -
In PHP, like many other languages, the "self" keyword refers to properties 
and methods inside the scope of a class. This pseudo-variable provides a 
reference to the calling object, that is the object to which the method or 
property belongs to.

The Scope Resolution Operator:
The :: symbol, known as the scope resolution operator is an in-built 
construct in PHP that is used to access contained methods and properties. 
It is used with the self keyword.

- this versus self -
- Use $this->member for accessing non-static members (methods and properties).
- Use self::$member for accessing static members (methods and properties).
*/

class Circle
{
  public $radius = 0;
  public static $pi = 3.14;

  public function getCircumference()
  {
    return (2 * self::$pi * $this->radius);
  }

  public function getArea()
  {
    return ($this->radius * $this->radius * self::$pi);
  }

  public function getDiameter()
  {
    return ($this->radius * 2);
  }
}

$obj = new Circle;
$obj->radius = 4;

echo "Radius is " . $obj->radius . "<br>";
echo "Diamater is " . $obj->getDiameter() . "<br>";
echo "Circumference is " . $obj->getCircumference(), "<br>";
echo "Area is " . $obj->getArea() . "<br>";
echo "Value of pi is " . $obj::$pi;