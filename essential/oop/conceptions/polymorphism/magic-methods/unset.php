<?php

/*
Метод __unset() буде виконаний у разі виклику unset() на 
недоступній (захищеній або приватній) або неіснуючій властивості.
*/

class User
{
  private $login;
  protected $password;
  public $age = 123;

  public function __construct($login, $password)
  {
    $this->login = $login;
    $this->password = $password;
  }

  public function __get($name)
  {
    if ($name !== 'loginn' && !property_exists($this, $name)) {
      die('__get:Такої властивості не існує');
    }
    return $this->$name;
  }

  public function __unset($name)
  {
    if (!property_exists($this, $name)) {
      die('__unset:Такої властивості не існує');
    }
    $this->$name = null;
  }
}

$user = new User('John', 'Qwerty085');
var_dump(
  $user->login,
  $user->password
);
echo '<br>';

unset($user->login);
unset($user->age);
unset($user->password);

var_dump(
  [
    $user->login,   // null, тому що тут ми не видаляли властивість, а замінили значення на null
    $user->password,
    // $user->age // NOTICE Undefined property
  ]
);
echo '<hr>';

unset($user->x);