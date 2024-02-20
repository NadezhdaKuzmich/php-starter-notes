<?php

/*
До PHP 7
array
className/interfaceName
callable
self

PHP 7.0
Скалярні типи
int
float
bool
string

PHP 7.1
?<typeName>
iterable
: void

PHP 7.2
object
*/

// практичні приклади контролю типів, що повертаються
class X
{
  // < 7.0
  public function setData1(self $q)
  {
  }
  public function setData11(array $q)
  {
  }
  public function setData2(callable $callable)
  {
  }
  public function setData21(iterable $q)
  {
  }
  public function setData22(DateTime $q)
  {
  }

  // 7.0
  public function setData41(bool $q)
  {
  }
  public function setData42(int $q)
  {
  }
  public function setData43(float $q)
  {
  }
  public function setData44(string $q)
  {
  }

  // 7.1
  public function setData3(?int $q): void
  {
  }
  public function setData31(iterable $q): ?string
  {
  }

  // 7.2
  public function setData4(object $q)
  {
  }
}

// у PHP 7.4 з'явилася можливість задавати властивостям типи даних і констант
// було
class Was
{
  const DEFAULT_NAME = 'user';
  const DEFAULT_AGE = 0;

  public $name;
  public $age;
  public $bestFriend;
  public $someOtherData = null;
}

// PHP 7.4
class Now
{
  public const DEFAULT_NAME = 'user';
  public const DEFAULT_AGE = 0;

  public string $name;
  public int $age;
  public self $bestFriend;
  public ?array $someOtherData;
}