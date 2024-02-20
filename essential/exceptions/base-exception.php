<?php

/*
У PHP під час некоректної роботи програми можуть бути 
викликані 2 типи класів: 
1. Винятки (exceptions)
2. Помилки (errors)

Усі класи помилок і виключень успадковуються від інтерфейсу Throvable.
Throvable надає великий API для того, щоб найкращим чином описати,
чому ж додаток зрештою став поводитися неправильно.

Усі класи-спадкоємці викидаються через спеціальну конструкцію PHP - throw.
Якщо ви знаєте, що додаток у певному місці може викинути виняток, код 
обертається в конструкцію try, з виловом Throvable за допомогою спеціальної 
конструкції catch.

Throvable - Executed only in PHP 7, will not match in PHP 5.x.
*/

// створюємо власне виключення
class InvalidValue extends Exception
{
}

// винятки, базовий приклад
class RandomPositiveValue
{
  public int $from;
  public int $to;

  public function __construct(int $from, int $to)
  {
    $this->from = $from;
    $this->to = $to;
    $this->validateValues();
  }

  private function validateValues()
  {
    try {
      if ($this->from < 0 || $this->to < 0) {
        // виключення
        throw new Exception('Значення не може бути менше 0 !');
      } elseif ($this->to <= $this->from) {
        // власне виключення
        throw new InvalidValue('$to не може бути менше $from !');
      }
      echo 'Well done!' . "<br>";
    } catch (Exception $e) {
      echo 'Error: ' . $e->getMessage() . "<br>";
    }
  }
}

$value3 = new RandomPositiveValue(1, 5);
$value = new RandomPositiveValue(-1, 1);
$value2 = new RandomPositiveValue(1, 1);

// або:
// try {
//   $value = new RandomPositiveValue(-1, 1);
//   $value2 = new RandomPositiveValue(1, 1);
//   $value3 = new RandomPositiveValue(1, 5);
// } catch (Throwable $e) {
//     зробити щось, якщо зловимо помилку
// } finally {
//     зробити щось після того, як зловили/незловили помилку
// }