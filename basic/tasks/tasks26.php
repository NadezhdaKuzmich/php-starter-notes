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

// task 4
class File
{
  public $name;
  public $size;

  public function __construct($name, $size)
  {
    $this->name = $name;
    $this->size = $size;
  }

  public static function calculateTotalSize($files)
  {
    $totalSize = 0;

    foreach ($files as $file) {
      if ($file instanceof File) {
        $totalSize += $file->size;
      }
    }

    return $totalSize;
  }
}

echo "<b>Task 4:</b><br>";
$file1 = new File("file1.txt", 1000);
$file2 = new File("file2.txt", 2000);
$file3 = new File("file3.txt", 1500);

$files = [$file1, $file2, $file3];
$totalSize = File::calculateTotalSize($files);

echo "Total size of files: $totalSize bytes";
echo "<hr>";