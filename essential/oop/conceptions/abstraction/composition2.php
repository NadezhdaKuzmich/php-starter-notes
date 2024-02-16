<?php

// Композиція: об'єкт A керує часом життя об'єкта B
class Interval
{
  private $from;
  private $to;

  public function __construct($from, $to)
  {
    $this->from = $from;
    $this->to = $to;
  }

  public function getFrom()
  {
    return $this->from;
  }

  public function getTo()
  {
    return $this->to;
  }
}

class ShopFilters
{
  private $priceFilters;
  private $quantity;

  public function __construct($quantity)
  {
    // Композиція - створюємо об'єкт усередині іншого об'єкта,
    $this->priceFilters = new Interval(1, 123);
    $this->quantity = $quantity;
  }

  public function getFilters()
  {
    return [
      'priceFrom' => $this->priceFilters->getFrom(),
      'priceTo' => $this->priceFilters->getTo(),
      'quantity' => $this->quantity
    ];
  }
}

$filtersMenu = new ShopFilters(2);
echo '<pre>';
var_dump($filtersMenu->getFilters());
echo '</pre>';

/// ВИСНОВОК: при такій передачі даних у нас:
/// 1. Кожен клас робить щось своє
/// 2. Клас створюється всередині, і там же "помирає" (менша ймовірність,
/// що хтось його змінить під час роботи програми)
/// 3. Відсутність гнучкості у виконанні