<?php

/*
Генератор - простіший спосіб перебрати якийсь пул даних.
Головна особливість - є якийсь метод/ф-я які повертають
через yield невелику к-ть даних.
*/

class Data
{
  public function getData(): Generator
  {
    $someArr = [1, 2, 3, 4, 5, 6, 7, 8, 8, 1, 2, 3123, 123, 123, 12, 31, 23, 1];

    foreach ($someArr as $data) {
      yield $data;
    }
  }
}

$getData = new Data();

foreach ($getData->getData() as $data) {
  echo $data . "<hr>";
}