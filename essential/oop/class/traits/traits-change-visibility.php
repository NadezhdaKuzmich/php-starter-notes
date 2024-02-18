<?php

// зміна області видимості методу з трейта всередині класу
trait T
{
  public function getData()
  {
    print 'protected';
  }
}

class C
{
  use T {
    // ось так виглядає цей трюк
    getData as protected;
  }
}

$c = new C();
// echo $c->getData(); // Fatal error: Uncaught Error: Call to protected method C::getData() 