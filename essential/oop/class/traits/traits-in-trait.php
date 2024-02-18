<?php

// вкладеність трейтів:
// трейт всередині трейта всередині трейта всередині трейта всередині трейта ...
trait A0
{
  public function getA0()
  {
    return 'getA0';
  }
}
trait A1
{
  public function getA1()
  {
    return 'getA1';
  }
}
trait A2
{
  public function getA2()
  {
    return 'getA2';
  }
}
trait A3
{
  public function getA3()
  {
    return 'getA3';
  }
}

trait B0
{
  use A0, A1, A2, A3;
  public function getB0()
  {
    return 'getB0';
  }
}

trait C0
{
  use B0;
  public function getC0()
  {
    return 'getC0';
  }
}


class CustomClass
{
  use C0;
}

$example = new CustomClass();
echo "<pre>";
var_dump(
  [
    $example->getA0(),
    $example->getA1(),
    $example->getA2(),
    $example->getA3(),
    $example->getB0(),
    $example->getC0(),
  ]
);
echo "</pre>";