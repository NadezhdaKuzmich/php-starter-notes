<?php

/*
Як краще будувати архітектуру:
- Гнучкою
- Код незалежний
- Підвищуємо рівень абстракції
- Користуватися інтерфейсами
- Відокремлювати код від бізнес логіки

- Інтерфейсний підхід
Уникаємо прямих залежностей під час використання MiddleWare.

- Використовуємо конфігурації
Створити файли підключення до БД залежно від середовища: 
production, development, testing

- Використовуємо абстракції, щоб уникати прямих залежностей.
- Основні контейнери: Mailer, Logger, DataBaseConnector, Cache, 
DomainService.
- Розділяємо на Development і Production.
- Використовуючи DI код легше перевикористовувати і зручніше читати.
Коли знижується число залежностей компонента, це робить легшим 
перевикористання в іншому контексті.
- Через сигнатуру об'єкта А можна передати безпосередньо в об'єкт D
Повідомлення між компонентами в структурі MVC: view -> controller -> model
*/

class Model
{
  public $string;
  public function __construct()
  {
    $this->string = "MVC + PHP = Awesome!";
  }
}

class View
{
  private $model;
  private $controller;
  public function __construct($controller, $model)
  {
    $this->controller = $controller;
    $this->model = $model;
  }

  public function output()
  {
    return "<p>" . $this->model->string . "</p>";
  }
}

class Controller
{
  private $model;
  public function __construct($model)
  {
    $this->model = $model;
  }
}

$model = new Model();
$controller = new Controller($model);
$view = new View($controller, $model);
echo $view->output();