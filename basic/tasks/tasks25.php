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