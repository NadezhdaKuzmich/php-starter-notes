<?php

/*
Закриття - властивості та методи "закриваються" всередині контексту класу
Приховування - частина логіки навмисно ховається, і залишається тільки те,
що "має бути"
*/

class Customer
{
  // ЗАКРИТІ всередині контексту класу властивості
  protected $name = 'Some Name';
  protected $age = 0;
  protected $phone = "+380000000000";

  public function getData()
  {
    return [
      'name' => $this->getName(),
      'age' => $this->age,
      'phone' => $this->phone
    ];
  }

  // ПРИХОВАНА логіка класу
  protected function getName()
  {
    return trim($this->name);
  }
}

$customer = new Customer();
// $customer->name = 'New Name'; // Error
echo '<pre>';
var_dump($customer->getData());
echo '</pre>';