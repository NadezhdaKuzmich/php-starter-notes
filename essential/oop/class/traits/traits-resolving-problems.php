<?php

// Розв'язання конфлікту імен у трейтах

// 1. якщо є метод у трейт, і метод у класі, і я хочу використовувати обидва
trait T1
{
  public function getData()
  {
    return 'some data 1';
  }
}

class C1
{
  use T1 {
    // метод з трейта, який потрібно перейменувати "as" нове ім'я
    T1::getData as traitGetData;
  }

  public function getData()
  {
    return [1, 2, 3, 4];
  }
}

$example1 = new C1();
echo '<pre>';
var_dump(
  $example1->getData(),
  $example1->traitGetData()
);
echo '</pre>';

// 1.1 Попрактикуємося з великою кількістю трейтів
trait T_20
{
  public function getData()
  {
    return 'some data 1';
  }
}

trait T_21
{
  public function getData()
  {
    return 'some data 2';
  }
}

class C2
{
  use T_20, T_21 {
    T_20::getData as traitGetData;
    T_21::getData as trait2GetData;
  }

  public function getData()
  {
    return [1, 2, 3, 4];
  }
}

$example2 = new C2();
echo '<pre>';
var_dump(
  [
    $example2->getData(),
    $example2->traitGetData(),
    $example2->trait2GetData()
  ]

);
echo '</pre>';

// 2. Ок, тепер беремо ситуацію, що трейт дійсно розширює функціонал класу,
// і в ньому не було таких самих методів
trait T_30
{
  public function getData()
  {
    return 'some data 1';
  }
}

trait T_31
{
  public function getData()
  {
    return 'some data 2';
  }
}

class C3
{
  // тепер у нас конфлікт методів
  // клас не знає, який же йому тут використовувати
  // якщо нічого не зробити, буде:
  // Fatal error: Trait method getData has not been applied...
  // use T_30, T_31;

  // щоб розв'язати проблему, ми маємо вказати, який же саме з 2х
  // метод буде використовуватися,
  // а другому дати аліас, як ми робили раніше
  use T_30, T_31 {
    T_30::getData insteadof T_31;
    T_31::getData as getDataFromTrait;
  }
}

$example3 = new C3();
echo '<pre>';
var_dump(
  [
    $example3->getData(),
    $example3->getDataFromTrait()
  ]
);
echo '</pre>';