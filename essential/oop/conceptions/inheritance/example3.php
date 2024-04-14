<?php
class Triangle
{
  public $length = 0;
  public $height = 0;

  public function __construct($length, $height)
  {
    $this->length = $length;
    $this->height = $height;
  }

  public function area()
  {
    return $this->length * $this->height / 2;
  }
}

function test($length, $height)
{
  $obj = new Triangle($length, $height);
  echo "Area: " . $obj->area() . "<br>";
}

test(8, 2.2);
test(2.4, 6.8);
test(5.5, 1.7);
test(7.3, 4.4);