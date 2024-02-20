<?php

// ловимо кілька винятків
class Ex1 extends Exception
{
}

class Ex2 extends Exception
{
}

class Ex3 extends Exception
{
}

class RandomPositiveValue
{
  private const INFINITY = 1_000_000_000_000;
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
    if ($this->from < 0) {
      throw new Ex1('Значення не може бути менше 0 !');
    } elseif ($this->to <= $this->from) {
      throw new Ex2('$to не може бути менше $from !');
    } elseif ($this->to > self::INFINITY) {
      throw new Ex3('$to не може бути більше 1_000_000_000_000 !');
    }
    echo 'Well done!' . "<br>";
  }
}

try {
  $value3 = new RandomPositiveValue(1, 5);
  $value = new RandomPositiveValue(-1, 1); // error
  $value2 = new RandomPositiveValue(1, 1);
} catch (Ex1 $e) {
  // зробити щось для випадку 1
  echo 'Error: ' . $e->getMessage() . "<br>";
} catch (Ex2 $e) {
  // зробити щось для випадку 2
  echo 'Error: ' . $e->getMessage() . "<br>";
} catch (Ex3 $e) {
  // зробити щось для випадку 3
  echo 'Error: ' . $e->getMessage() . "<br>";
} catch (Throwable $e) {
  // зробити щось для випадку, коли помилка не та, яку ми очікували
  echo 'Error: ' . $e->getMessage() . "<br>";
} finally {
  // зробити щось наприкінці, незалежно від того,
  // була викинута помилка, чи ні
  echo "Finally";
}