<?php

// task 1
class Logger
{
  private static $instance;
  private $logs;

  private function __construct()
  {
    $this->logs = [];
  }

  public static function getInstance()
  {
    if (self::$instance === null) {
      self::$instance = new Logger();
    }

    return self::$instance;
  }

  public function log($message)
  {
    $this->logs[] = $message;
  }

  public function getLogs()
  {
    return $this->logs;
  }
}

echo "<b>Task 1:</b><br>";
$logger = Logger::getInstance();
$logger->log("Log message 1</br>");
$logger->log("Log message 2</br>");

$logs = $logger->getLogs();
foreach ($logs as $log) {
  echo $log;
}
echo "<hr>";

// task 2
class ShoppingCart
{
  private $items;
  private $total;

  public function __construct()
  {
    $this->items = [];
    $this->total = 0;
  }

  public function addItem($item, $price)
  {
    $this->items[$item] = $price;
    $this->total += $price;
  }

  public function getTotal()
  {
    return $this->total;
  }
}

echo "<b>Task 2:</b><br>";
$cart = new ShoppingCart();
$cart->addItem("Product 1", 20);
$cart->addItem("Product 2", 30);
$cart->addItem("Product 3", 10);

$total = $cart->getTotal();
echo "Total cost: $$total";
echo "<hr>";

// task 3
class Calculator
{
  private $result;

  public function __construct()
  {
    $this->result = 0;
  }

  public function getResult()
  {
    return $this->result;
  }

  public function add($number)
  {
    $this->result += $number;
  }

  public function subtract($number)
  {
    $this->result -= $number;
  }
}

echo "<b>Task 3:</b><br>";
$calculator = new Calculator();
$calculator->add(4);
$calculator->add(5);
$calculator->subtract(3);

$result = $calculator->getResult();
echo "Result: $result";
echo "<hr>";