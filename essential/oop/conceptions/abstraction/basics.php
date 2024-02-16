<?php

/*
Абстракція - концепція ООП, яка говорить нам про те, що:
- Об'єкт повинен мати тільки потрібні властивості та методи;
- Непотрібна логіка має бути перекладена на клас, у якому вона буде "потрібною".
- Свідчить, що клас не повинен містити зайвої функціональності. Краще її винести 
окремо, і правильно підключити.

Є 3 базові поняття абстракції:
1. Асоціація - ми говоримо про те, що є клас А, і клас Б, між ними є зв'язок, 
але нам однаково який.
2. Агрегація - клас А отримує посилання на клас Б.
3. Композиція - клас А створює всередині себе (а заодно і керує часом життя) 
екземпляр класу Б.

Код, який не поділяється на незалежні класи, і не використовує 
перевагу запозичення логіки - набір незалежних класів.
*/

// код без абстракцій - набір незалежних класів
class Calculator
{
  public static function substract($val1, $val2)
  {
    return $val1 - $val2;
  }
}

class User
{
  public $birthYear;

  public function __construct($birthYear)
  {
    $this->birthYear = $birthYear;
  }
}

$user = new User(1996);
$currentYear = date('Y');
$userAge = Calculator::substract(
  $currentYear,
  $user->birthYear
);

var_dump($userAge);
echo '<br>';

// Абстракція
class DateCalculator
{
  protected $currentYear;

  public function __construct($currentYear = null)
  {
    if (!$this->currentYear) {
      $currentYear = date('Y');
    }

    $this->currentYear = $currentYear;
  }

  public function substract($anotherYear)
  {
    return $this->currentYear - $anotherYear;
  }
}

class Human
{
  private $birthYear;
  private $calculator;

  public function __construct($birthYear, $dateCalculator = null)
  {
    if (!$dateCalculator) {
      $dateCalculator = new DateCalculator();
    }
    $this->calculator = $dateCalculator;
    $this->birthYear = $birthYear;
  }

  public function getAge()
  {
    $userAge = $this->calculator->substract($this->birthYear);
    return $userAge;
  }
}

$me = new Human(1996);
var_dump($me->getAge());