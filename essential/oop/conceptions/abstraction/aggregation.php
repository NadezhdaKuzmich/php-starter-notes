<?php

// Агрегація: об'єкт А отримує посилання на об'єкт B
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

  public function __construct($priceFilters, $quantity)
  {
    // Агрегація - передаємо за посиланням,
    // об'єкт не особливо цікавить, звідки ми взяли цей інтервал
    if (!$priceFilters instanceof Interval) {
      die('Неверно переданное значение');
    }
    $this->priceFilters = $priceFilters;
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
$priceInterval = new Interval(1, 123);
$filtersMenu = new ShopFilters($priceInterval, 2);
echo '<pre>';
var_dump($filtersMenu->getFilters());
echo '</pre>';

/// ВИСНОВОК: при такій передачі даних у нас:
/// 1. Кожен клас робить щось своє
/// 2. Можна створювати потрібні класи в потрібних САМЕ нам місцях, і потім їх передавати
/// 3. Гнучкість у виконанні