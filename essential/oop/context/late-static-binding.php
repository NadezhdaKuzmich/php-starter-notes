<?php

/*
Пізнє статичне зв'язування
- Механізм мови, який дає змогу викликати значення статичної 
властивості/методу, що знаходиться вище за все в ієрархії класів.
- ключове слово static.
*/

class A
{
  protected static $name = 'first';

  public function getName()
  {
    return self::$name;
  }

  public function getCurrentName()
  {
    return static::$name;
  }
}

class B extends A
{
  public static $name = 'second';
}

$var = new B();
var_dump(
  $var->getName(), // first
  $var->getCurrentName(), // second
);