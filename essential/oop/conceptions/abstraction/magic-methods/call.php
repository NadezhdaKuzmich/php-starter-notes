<?php

/*
__call() запускається під час виклику недоступних методів у контексті об'єкт.
*/

class User
{
  private $login;
  private $password;
  public $age = 123;

  public function __construct($login, $password)
  {
    $this->login = $login;
    $this->password = $password;
  }

  public function __call($name, $arguments)
  {
    if ($name === 'getData') {

      return [
        $this->login,
        $this->password,
      ];
    }
    die('__call:Такого методу не існує');
  }
}

$user = new User('John', 'Qwerty085');
var_dump($user->getData());
echo '<hr>';
var_dump($user->getSecret());