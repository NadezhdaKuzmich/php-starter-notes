<?php

// getters/setters
class Customer
{
  private $name;
  private $phone;

  public function setName($name)
  {
    $this->name = $name;
  }

  public function setPhone($phone)
  {
    $this->phone = $phone;
  }

  public function getName()
  {
    return $this->name;
  }

  public function getPhone()
  {
    return $this->phone;
  }
}

$customer = new Customer();
// OK
$customer->setName('Nadiia');
$customer->setPhone('0630000000');
echo '<pre>';
var_dump($customer->getName());
var_dump($customer->getPhone());
echo '</pre>';

$customer2 = new Customer();
// FATAL ERROR,тому що методи приватні, і з коду видно, що з ними можна
// взаємодіяти тільки через "геттери", і "сеттери"
// $customer2->name = 'asd';   // Error
// $customer2->phone = 12322;  // Error