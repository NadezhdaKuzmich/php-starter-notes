<?php

/*
- constructor -
A constructor is used to initialize member variables when an object 
is declared. It is automatically called at the time when the object 
of the class is declared.
Note: A constructor is a member function that is usually public.
Also keep in mind that unlike other methods defined inside a class, 
a constructor cannot return a value.

- destructors -
Destructors are the opposite of constructors, as they define the 
final behavior of an object and execute when the object is no longer 
in use. An object’s destructor, which takes no parameters, is called 
sometime after an object is no longer referenced, but the complexities 
of garbage collection make the specific timing of destructors uncertain.
Note: Destructors are not called but are invoked automatically.
*/

class Shape
{
  public $sides = 0;
  public $name = " ";

  public function __construct($name, $sides)
  {
    $this->sides = $sides;
    $this->name = $name;

  }

  public function __destruct()
  {
    echo "Destructor Called!";
  }

  public function description()
  {
    echo "A $this->name with $this->sides sides.";
  }
}

$myShape = new Shape("hexagon", 6);
$myShape->description();
echo "<hr>";