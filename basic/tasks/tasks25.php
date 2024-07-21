<?php

// task 1
session_start();
$userPreferences = [
  "theme" => "light",
  "language" => "Spanish",
  "notifications" => true
];
$_SESSION["preferences"] = $userPreferences;

echo "<b>Task 1:</b><br>";
echo "User preferences have been stored in the session variable 'preferences'.<hr>";

// task 2
echo "<b>Task 2:</b><br>";
if (isset($_SESSION["preferences"])) {
  $userPreferences = $_SESSION["preferences"];

  echo "User Preferences:</br>";
  foreach ($userPreferences as $key => $value) {
    echo "$key: $value </br>";
  }
} else {
  echo "No user preferences found.";
}
echo "<hr>";

// task 3
$maxSessions = 3;

echo "<b>Task 3:</b><br>";
if (!isset($_SESSION['session_count'])) {
  $_SESSION['session_count'] = 1;
} else {
  $_SESSION['session_count']++;

  if ($_SESSION['session_count'] > $maxSessions) {
    session_unset();
    session_destroy();
    echo "Maximum session limit exceeded. Please log in again.<br>";
  }
}
echo isset($_SESSION['session_count'])
  ? "Session active. Session count: " . $_SESSION['session_count']
  : 'Session destroy.';
echo "<hr>";

// task 4
if (!isset($_SESSION['session_count'])) {
  session_start();
}
session_regenerate_id(true);

echo "<b>Task 4:</b><br>";
echo "Session ID has been regenerated.<hr>";

// task 5
echo "<b>Task 5:</b><br>";
if (isset($_SESSION['last_access_time'])) {
  $lastAccessTime = $_SESSION['last_access_time'];
  echo "Last access time: " . date('Y-m-d H:i:s', $lastAccessTime);
  $_SESSION['last_access_time'] = time();
} else {
  $_SESSION['last_access_time'] = time();
  echo "Session started. First access.";
}
echo "<hr>";

// task 6
$cookieName = "myCookie";
$value = "Cookie Value";

setcookie($cookieName, $value, time() + 3600, "/");
$_SESSION[$cookieName] = $value;

echo "<b>Task 6:</b><br>";
echo "Cookie value: " . $_COOKIE[$cookieName] . "<br>";
echo "Session variable value: " . $_SESSION[$cookieName] . "<hr>";

// task 7
class Rectangle
{
  private $length;
  private $width;

  public function __construct($length, $width)
  {
    $this->length = $length;
    $this->width = $width;
  }

  public function getArea()
  {
    return $this->length * $this->width;
  }

  public function getPerimeter()
  {
    return 2 * ($this->length + $this->width);
  }
}

echo "<b>Task 7:</b><br>";
$rectangle = new Rectangle(12, 9);
echo "Area: " . $rectangle->getArea() . "<br>";
echo "Perimeter: " . $rectangle->getPerimeter() . "<hr>";

// task 8
class Circle
{
  private $radius;

  public function __construct($radius)
  {
    $this->radius = $radius;
  }

  public function getArea()
  {
    return pi() * pow($this->radius, 2);
  }

  public function getCircumference()
  {
    return 2 * pi() * $this->radius;
  }
}

echo "<b>Task 8:</b><br>";
$circle = new Circle(7);
echo "Area: " . $circle->getArea() . "<br>";
echo "Circumference: " . $circle->getCircumference() . "<hr>";

// task 9
interface Resizable
{
  public function resize($percentage);
}

class Square implements Resizable
{
  private $side;

  public function __construct($side)
  {
    $this->side = $side;
  }

  public function resize($percentage)
  {
    $this->side = $this->side * ($percentage / 100);
  }

  public function getArea()
  {
    return pow($this->side, 2);
  }

  public function getSide()
  {
    return $this->side;
  }
}

echo "<b>Task 9:</b><br>";
$square = new Square(10);
echo "Initial Side Length: " . $square->getSide() . "<br>";
echo "Resized Side Length: " . $square->getSide() . "<br>";
echo "Area: " . $square->getArea() . "<hr>";

// task 10
class Vehicle
{
  private $brand;
  private $model;
  private $year;

  public function __construct($brand, $model, $year)
  {
    $this->brand = $brand;
    $this->model = $model;
    $this->year = $year;
  }

  public function displayDetails()
  {
    echo "Brand: $this->brand <br>";
    echo "Model: $this->model <br>";
    echo "Year: $this->year <br>";
  }
}

echo "<b>Task 10:</b><br>";
$car = new Vehicle("Ford", "F-150", 2020);
$car->displayDetails();
echo "<hr>";

// task 11
class StudentU
{
  public $name;
  public $age;
  public $grade;

  public function displayInfo()
  {
    echo "Name: $this->name <br>";
    echo "Age: $this->age <br>";
    echo "Grade: $this->grade <br>";
  }
}

echo "<b>Task 11:</b><br>";
$student = new StudentU();
$student->name = "Gwladus Andrea";
$student->age = 16;
$student->grade = 10;
$student->displayInfo();
echo "<hr>";

// task 12
class Validation
{
  public static function validateEmail($email)
  {
    return filter_var($email, FILTER_VALIDATE_EMAIL);
  }

  public static function validatePassword($password)
  {
    return strlen($password) >= 8;
  }

  public static function validateField($field)
  {
    return !empty($field);
  }
}

$email = "admin@example.com";
$password = "password123";
$field = "";

echo "<b>Task 12:</b><br>";
if (Validation::validateEmail($email)) {
  echo "Email is valid.<br>";
} else {
  echo "Email is invalid.<br>";
}

if (Validation::validatePassword($password)) {
  echo "Password is valid.<br>";
} else {
  echo "Password is invalid.<br>";
}

if (Validation::validateField($field)) {
  echo "Field is valid.<br>";
} else {
  echo "Field is invalid.<br>";
}