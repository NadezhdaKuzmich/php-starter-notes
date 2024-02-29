<?php

/*
Принципи SOLID - це рекомендації, які також можуть застосовуватися 
в роботі над наявним ПЗ для його поліпшення, наприклад, для видалення 
"поганого коду". Застосовуючи правила, вам буде легше підтримувати і 
розширювати проєкт.

- Принцип єдиної відповідальності (Single responsibility)
Дотримуючись правила Single Responsibility ми інкапсулюємо в клас
функціональність, притаманну тільки йому. Клас має бути 
відповідальним лише за щось одне.

- Принцип відкритості/закритості (Open-closed)
Принцип Open Closed відкриває сутності для розширення, але закриває 
для модифікації.

- Принцип підстановки Барбари Лісков (Liskov substitution)
За принципом Барбари Лісков класи-спадкоємці, не порушуючи роботу 
програми, могли б використовуватися замість батьківських класів, 
від яких вони утворені. Функції, які використовують базовий тип, 
повинні мати можливість використовувати підтипи базового типу не 
знаючи про це.

- Принцип поділу інтерфейсу (Interface segregation)
Багато інтерфейсів для клієнтів краще, ніж один інтерфейс.

- Принцип інверсії залежностей (Dependency Invertion)
Залежність на Абстракціях. Немає залежності на щось конкретне

Переваги використання SOLID принципи:
● уникати створення поганої архітектури
● стандарт програмування
● робить код більш розширюваним, код логічніший і читабельніший
*/

// Single responsibility
class Orders
{
  public function calculate()
  {
  }
  public function getItems()
  {
  }
  public function getItemsCount()
  {
  }
  public function addItems($item)
  {
  }
  public function deleteItem($item)
  {
  }
}
class OrdersRepository
{
  public function load($orderId)
  {
  }
  public function save($order)
  {
  }
  public function update($order)
  {
  }
  public function delete($order)
  {
  }
}

//Open-closed Principle
interface IOrderSource
{
  public function load($orderId);
  public function save($order);
  public function update($order);
  public function delete($order);
}

class MysqlOrderSource implements IOrderSource
{
  public $url;
  public $login;

  public function __construct($url, $login)
  {
    $this->url = $url;
    $this->login = $login;
  }

  public function load($orderId)
  {
  }
  public function save($order)
  {
  }
  public function update($order)
  {
  }
  public function delete($order)
  {
  }
}
class MongoOrderSource implements IOrderSource
{
  public $url;

  public function __construct($url)
  {
    $this->url = $url;
  }

  public function load($orderId)
  {
  }
  public function save($order)
  {
  }
  public function update($order)
  {
  }
  public function delete($order)
  {
  }
}

class Db
{
  public function connect($type)
  {
  }
}

$data = new MongoOrderSource('http://www');
$obj = new Db();
echo $obj->connect($data);

//Liskov
interface LessonsRepositoryInterface
{
  public function getAll();
}

class FileLessonRepository implements LessonsRepositoryInterface
{
  public function getAll()
  {
    return [];
  }
}

class DbLessonRepository implements LessonsRepositoryInterface
{
  public function getAll()
  {
  }
}

//interface Segregation
interface Items
{
  public function setCondition($condition);
  public function setPrice($price);
}

class IClothes
{
  public function setColor($color)
  {
  }
  public function setSize($size)
  {
  }
  public function setmaterial($material)
  {
  }
}

class IDiscountables
{
  public function applyDiscount($discount)
  {
  }
  public function applyPromocode($promocode)
  {
  }
}

//Dependancy Invertion
interface IOrderProcessor
{
  public function checkout($order);
}

class OrderProcessors implements IOrderProcessor
{
  public function checkout($order)
  {
  }
}