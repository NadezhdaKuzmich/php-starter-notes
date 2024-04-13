<?php

/*
Inheritance is one of the major reasons for using object-oriented 
programming in PHP. Classes can inherit the properties and methods 
of another class using the keyword extends.

Characteristics
- A derived class has: -
- All members defined in the derived class.
- All ​members declared in the base class.

- A derived class can: -
- Use all public and protected members defined in the derived class.
- Use all public and protected members defined in the base class.
- Override an inherited member

A derived class cannot:
- Inherit constructors and destructors
*/

class Car
{
  public $brand;
  public $color;
  public $maxSpeed;
  public $currentSpeed = 0;

  public function __construct($brand, $color = "black", $maxSpeed = 500)
  {
    $this->brand = $brand;
    $this->color = $color;
    $this->maxSpeed = $maxSpeed;
  }

  public function move($speed)
  {
    $this->currentSpeed = $speed;
  }

  public function stop()
  {
    $this->currentSpeed = 0;
  }
}

class Mitsubishi extends Car
{
  public $sign = 'M';
  // public function __construct($brand, $color, $maxSpeed)
  // {
  //   parent::__construct($brand, $color, $maxSpeed);
  // }

  // public function __construct()
  // {
  //   parent::__construct('Mitsubishi', 'Black', 460);
  // }

  public function __construct($color = 'black', $maxSpeed = 500)
  {
    parent::__construct('Mitsubishi', $color, $maxSpeed);
  }
}

$audi = new Car('AUDI', 'white', 550);
$audi->move(60);

$mitsubishi = new Mitsubishi();
$mitsubishi->move(80);

echo "<pre>";
var_dump($audi);
var_dump($mitsubishi);
echo "</pre>";