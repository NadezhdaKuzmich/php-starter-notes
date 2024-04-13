<?php
class BaseShape
{
  public $sides = 0;
  public $name = " ";

  public function __construct($name, $sides)
  {
    $this->sides = $sides;
    $this->name = $name;
  }

  public function description()
  {
    return "A $this->name with $this->sides sides.";
  }
}

class Square extends BaseShape
{
  public $sideLength = 0;

  public function __construct($sideLength)
  {
    parent::__construct("square", 4); //calling parent class constructor
    $this->sideLength = $sideLength;
  }

  public function perimeter()
  {
    return $this->sides * $this->sideLength;
  }

  public function area()
  {
    return $this->sideLength * $this->sideLength;
  }
}

$mySquare = new Square(10);
echo $mySquare->description() . "<br>";
echo "Perimeter of the square is: " . $mySquare->perimeter() . "<br>";
echo "Area of the square is: " . $mySquare->area();