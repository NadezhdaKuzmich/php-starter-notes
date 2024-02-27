<?php

/*
- Погана практика робити пряму залежність класу від іншого класу.
- Щоб зробити код більш гнучким, просто передавайте об'єкт класу 
аргументом, через __construct.
- Також може бути гарною практикою реалізувати setter метод, 
наприклад setService.
- Пам'ятаємо про інкапсуляцію і робимо властивості класу - private.
- Застосовуємо інтерфейс для того, щоб зробити підтримку різних БД 
у нашому main класі.
- Через конструктор передаються такі залежності, без яких клас не 
зможе функціонувати.
- Через set-методи передаються залежності, які не обов'язкові.
*/
class Service
{
  protected $id;

  public function __construct($id)
  {
    $this->id = $id;
  }
}

//впровадження через властивість класу
class App1
{
  public $service;
}

$app = new App1();
$service = new Service('888');
$app->service = $service;


// Впровадження через setter метод:
class App2
{
  protected $service;

  function setService($service)
  {
    $this->service = $service;
  }
}

$app = new App2();
$service = new Service('555');
$app->setService($service);

//впровадження через конструктор
class App3
{
  protected $service;

  function __construct(Service $service)
  {
    $this->service = $service;
  }
}

$service = new Service('333');
$app = new App3($service);

//як було раніше
class DataBase
{
  public function connect()
  {
    return 'Done';
  }
}

class UserRepository
{
  public function getUsers()
  {
    $db = new DataBase();
    $connection = $db->connect();
  }
}

// з інтерфейсами
interface DbInterface
{
  public function connect();
}

class DBMysql implements DbInterface
{
  public function connect()
  {
  }
}

class DBSqlLite implements DbInterface
{
  public function connect()
  {
    echo 'Done!';
  }
}

// в конструкторі
class UserRepo
{
  protected $db;

  public function __construct(DbInterface $db)
  {
    $this->db = $db;
  }
  public function getUsers()
  {
    $this->db->connect();
  }
}

$newDB = new DBSqlLite();
$userRepo = new UserRepo($newDB);
$userRepo->getUsers();

// впроваджуємо залежності класів B, C в клас A
// Впроваджуємо залежності в class A, щоб потім 
// їх викликати через Container
class A
{
  private $b;
  private $c;

  public function __construct($dependencyB, $dependencyC)
  {
    $this->b = $dependencyB;
    $this->c = $dependencyC;
  }
}

// десь у надрах фреймворку
// $container = new Container;
// $a = $container->get('A');

// або ось так в Laravel
// $foo = App::make('A');

// або ось так в Angular
// injector = ReflectiveInjector.resolveAndCreate([A, thingB, thingC]);
// let a = injector.get(A);