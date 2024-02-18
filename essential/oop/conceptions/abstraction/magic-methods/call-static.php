<?php

/*
__callStatic() запускається при виклику недоступних методів у статичному контексті
*/

class User
{
  private $login;
  private $password;
  private static $int = 0;

  public function __construct($login, $password)
  {
    $this->login = $login;
    $this->password = $password;
  }

  // цей магічний метод має ОБОВ'ЯЗКОВО бути статичним
  public static function __callStatic($name, $arguments)
  {
    if ($name === 'getNumber') {
      $return = self::$int;
      self::$int++;
      return $return;
    }
    die('__callStatic:Такого методу не існує');
  }
}

$user = new User('John', 'Qwerty085');
var_dump(
  $user::getNumber(), // 0
  $user::getNumber()  // 1
);

echo '<hr>';
var_dump($user::getSecret());