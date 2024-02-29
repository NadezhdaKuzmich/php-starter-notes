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
Якщо клас відповідає за кілька операцій одразу, ймовірність виникнення 
багів зростає - вносячи зміни, що стосуються однієї з операцій, ви, 
самі того не підозрюючи, можете торкнутися й інших.
Призначення:
Принцип слугує для поділу типів поведінки, завдяки якому помилки, 
спричинені модифікаціями в одній поведінці, не поширювалися на інші, 
не пов'язані з нею типи.

- Принцип відкритості/закритості (Open-closed)
Принцип Open Closed відкриває сутності для розширення, але закриває 
для модифікації.
Коли ви змінюєте поточну поведінку класу, ці зміни позначаються на всіх 
системах, що працюють із цим класом. Якщо хочете, щоб клас виконував 
більше операцій, то ідеальний варіант - не замінювати старі на нові, а 
додавати нові до вже наявних.
Призначення:
Принцип служить для того, щоб робити поведінку класу більш різноманітною, 
не втручаючись у поточні операції, які він виконує. Завдяки цьому ви 
уникаєте помилок у тих фрагментах коду, де задіяний цей клас.

- Принцип підстановки Барбари Лісков (Liskov substitution)
За принципом Барбари Лісков класи-спадкоємці, не порушуючи роботу 
програми, могли б використовуватися замість батьківських класів, 
від яких вони утворені. Функції, які використовують базовий тип, 
повинні мати можливість використовувати підтипи базового типу не 
знаючи про це.
У випадках, коли клас-потомок не здатний виконувати ті самі дії, 
що й клас-батько, виникає ризик появи помилок. 
Призначення:
Принцип слугує для того, щоб забезпечити сталість: клас-батько і 
клас-потомок можуть використовуватися однаковим чином без порушення 
роботи програми.

- Принцип поділу інтерфейсу (Interface segregation)
Багато інтерфейсів для клієнтів краще, ніж один інтерфейс.
Коли класу доводиться виконувати дії, які не несуть жодної 
реальної користі, це виливається в марну трату ресурсу, а 
в разі, якщо клас виконувати ці дії не здатний, веде до 
виникнення багів. Клас має виконувати тільки ті операції, 
які необхідні для здійснення його функцій. Усі інші дії 
слід або видалити зовсім, або перемістити, якщо є 
ймовірність, що вони знадобляться іншому класу в майбутньому.
Призначення:
Принцип слугує для того, щоб роздрібнити єдиний набір дій 
на низку менших наборів - отже, кожен клас робить те, що 
від нього дійсно вимагається, і нічого більше.

- Принцип інверсії залежностей (Dependency Invertion)
Залежність на Абстракціях. Немає залежності на щось конкретне
Модулі верхнього рівня не повинні залежати від модулів нижнього 
рівня. І ті, й інші мають залежати від абстракцій. Абстракції не 
повинні залежати від деталей. Деталі мають залежати від абстракцій.
Модулі (або класи) верхнього рівня = класи, які виконують операцію 
за допомогою інструмента.
Модулі (або класи) нижнього рівня = інструменти, які потрібні для 
виконання операцій.
Абстракції - представляють інтерфейс, що з'єднує два класи.
Деталі = специфічні характеристики роботи інструмента.
Згідно з цим принципом, клас не повинен з'єднуватися з інструментом, 
який застосовує для виконання операції. Замість цього він має бути 
з'єднаний з інтерфейсом, який допоможе встановити зв'язок між 
інструментом і класом. Крім того, принцип говорить, що ні інтерфейс, 
ні клас, не зобов'язані заглиблюватися в специфіку роботи інструменту. 
Навпаки, цей інструмент має підходити під вимоги інтерфейсу.
Призначення:
Цей принцип служить для того, щоб усунути залежність класів верхнього 
рівня від класів нижнього рівня за рахунок введення інтерфейсів.

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
interface Shape
{
  public function getArea(): int;
}

class Rectangle implements Shape
{
  private $width = 0;
  private $height = 0;

  public function __construct(int $width, int $height)
  {
    $this->width = $width;
    $this->height = $height;
  }

  public function getArea(): int
  {
    return $this->width * $this->height;
  }
}

class Square implements Shape
{
  private $length = 0;

  public function __construct(int $length)
  {
    $this->length = $length;
  }

  public function getArea(): int
  {
    return $this->length ** 2;
  }
}

function printArea(Shape $shape): void
{
  echo sprintf('%s has area %d. ', get_class($shape), $shape->getArea());
}

$shapes = [new Rectangle(4, 5), new Square(5)];
foreach ($shapes as $shape) {
  printArea($shape);
}

//interface Segregation
interface Items
{
  public function setCondition($condition);
  public function setPrice($price);
}

interface IClothes
{
  public function setColor($color);
  public function setSize($size);
  public function setmaterial($material);

}

interface IDiscountables
{
  public function applyDiscount($discount);
  public function applyPromocode($promocode);
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