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

// task 5
class Math
{
  public static function add($num1, $num2)
  {
    return $num1 + $num2;
  }

  public static function subtract($num1, $num2)
  {
    return $num1 - $num2;
  }

  public static function multiply($num1, $num2)
  {
    return $num1 * $num2;
  }
}

echo "<b>Task 5:</b><br>";
$result1 = Math::add(4, 3);
$result2 = Math::subtract(14, 4);
$result3 = Math::multiply(8, 2);

echo "Addition: $result1 <br>";
echo "Subtraction: $result2 <br>";
echo "Multiplication: $result3 <hr>";

// task 6
class Person
{
  private $name;
  private $age;

  public function __construct($name, $age)
  {
    $this->name = $name;
    $this->age = $age;
  }

  public function __toString()
  {
    return "Name: $this->name <br> Age: $this->age <br>";
  }
}

echo "<b>Task 6:</b><br>";
$person = new Person("Nadiia Kuzmich", 28);
echo "$person <hr>";

// task 7
$num = 3;
$factorial = 1;

for ($i = $num; $i >= 1; $i--) {
  $factorial *= $i;
}

echo "<b>Task 7:</b><br>";
echo "The factorial of $num is $factorial<hr>";

// task 8
echo "<b>Task 8:</b><br>";
echo '<br><table width="282" cellspacing="0" cellpadding="0" border="1">';

for ($row = 1; $row <= 8; $row++) {
  echo '<tr>';
  for ($column = 1; $column <= 8; $column++) {
    $total = $row + $column;
    if ($total % 2 == 0) {
      echo '<td height="35" width="35" bgcolor="#FFFFFF"></td>';
    } else {
      echo '<td height="35" width="35" bgcolor="#000000"></td>';
    }
  }
  echo '</tr>';
}

echo '</table><hr>';

// task 9
$str = "Tutorials Class";

echo "<b>Task 9:</b><br>";
echo "$str <br>";
echo strtoupper($str) . "<br>";
echo strtolower($str) . "<br>";
echo str_repeat($str, 3) . "<br>";
echo str_replace('Tutorials', 'PHP', $str) . "<br>";
echo strrev($str) . "<br>";
echo strlen($str) . "<br>";
echo "<hr>";

// task 10
$months = ['jan', 'feb', 'march', 'april', 'may'];
$deleteItem = 'march';

if (($key = array_search($deleteItem, $months)) !== false) {
  unset($months[$key]);
}

echo "<b>Task 10:</b><br><pre>";
print_r($months);
echo "</pre><hr>";

// task 11
$months = ['jan', 'feb', 'march', 'april', 'may'];
$deleteItem = 'april';

foreach (array_keys($months, $deleteItem) as $key) {
  unset($months[$key]);
}

echo "<b>Task 11:</b><br><pre>";
print_r($months);
echo "</pre><hr>";

// task 12
$months = ['jan', 'feb', 'march', 'april', 'may'];
$deleteItem = 'may';

$finalMonths = array_diff($months, [$deleteItem]);

echo "<b>Task 12:</b><br><pre>";
print_r($finalMonths);
echo "</pre>";