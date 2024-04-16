<?php

class TemperatureReport
{
  private $temperatures;

  public function __construct($temperatures)
  {
    $this->temperatures = $temperatures;
  }

  public function avg()
  {
    $total = 0;
    foreach ($this->temperatures as $temp) {
      $total += $temp;
    }
    return $total / count($this->temperatures);
  }

  public function repeated()
  {
    $values = array_count_values($this->temperatures);
    $popular = array_search(max($values), $values);
    return $popular;
  }
}

$temp = new TemperatureReport([78, 60, 62, 68, 71, 68, 73, 85, 66, 64, 76, 63]);
echo $temp->avg() . "<br>";
echo $temp->repeated() . "<br>";