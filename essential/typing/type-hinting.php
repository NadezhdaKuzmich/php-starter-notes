<?php

/*
У PHP є тренд на сувору типізацію. У хороших сучасних додатках часто приділяється 
чимало сил для того, щоб вони були максимально строго типізованими. Це робить 
додаток більш передбачуваним і простим для обслуговування.

Для збільшення строгості в PHP є 2 механізми:
1. Строгість типів (подача строго визначених типів на вхід функцій/методів). 
2. Строгість типів, що повертаються (повернення конкретних типів даних у
функціях/методах).

допустимі значення типів для typeHints:
- int
- float
- string
- bool
- object
- className/interfaceName
- callable (callback)
- array
- self
- iterable

Коваріантність - дозволяє дочірньому методу повертати більш конкретний тип, ніж тип 
повернення його батьківського методу. (У спадкоємці ми ніби уточнюємо інформацію)

Контраваріантність - дозволяє дочірньому методу повертати менш конкретний тип, ніж 
тип повернення його батьківського методу.
*/

// declare(strict_types=1); // strict typing

// практичні приклади контролю типів
class Status
{
  const STATUS_GOOD_USER = 1;
  const STATUS_UGLY_USER = 2;
  private $status;
  private $statuses = [
    self::STATUS_GOOD_USER,
    self::STATUS_UGLY_USER,
  ];

  // 1. int
  public function __construct($status)
  {
    if (!in_array($status, $this->statuses)) {
      die('Wrong status on Status');
    }
    $this->status = $status;
  }

  public function getStatus()
  {
    return $this->status;
  }
}

// class User
// {
//   private $name;
//   private $age;

//   public function __construct(
//     string $name,
//     int $age
//   ) {
//     $this->name = $name;
//     $this->age = $age;
//   }

//   public function getName(): string
//   {
//     return $this->name;
//   }
// }


class User2
{

  private $name;
  private $age;
  private $status;
  private $isActive;
  private $bestFriend;

  // 2. об'єкт як
  // 2.1 object public function setStatus(object $status)
  // 2.2 безпосередньо ім'я класу
  public function setStatus(Status $status)
  {
    $this->status = $status;
  }

  // 3. string | null
  public function setName(string $name = null)
  {
    $this->name = $name;
  }

  public function getName(): ?string
  {
    if ($this->name === null) {
      return "I don't know your name..." . '<br>';
    }
    return "Name is $this->name" . '<br>';
  }

  // 4. int/float
  // public function setAge(int $age)
  public function setAge(float $age)
  {
    $this->age = $age;
  }

  // 5. bool
  public function setIsActive(bool $isActive)
  {
    $this->isActive = $isActive;
  }

  // 6. self
  public function setBestFriend(self $bestFriend)
  {
    $this->bestFriend = $bestFriend;
  }
}

$user = new User2();
$user->setName('Nadiia'); // pass
echo $user->getName();

$user->setName(null); // pass
echo $user->getName();

$user->setName(12345678); // pass without strict typing: 12345678 => '12345678'
echo $user->getName();

// $user->setName(new class { }); // Fatal error: must be of type string

$user->setName(new class { // pass without strict typing: class => 'User'
  public function __toString()
  {
    return 'User';
  }
});
echo $user->getName();