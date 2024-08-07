<?php

// task 1
function reverseArr($arr)
{
  return array_reverse($arr);
}

echo "<b>Task 1:</b><br>";
$arr = [10, 20, -30, -40, 50];
$result = reverseArr($arr);
echo "Reverse array: " . implode(', ', $result) . "<hr>";

// task 2
function calculateSum($arr)
{
  $result = 0;

  foreach ($arr as $item) {
    $result += $item;
  }

  return $result;
}

echo "<b>Task 2:</b><br>";
echo calculateSum([10, 20, 30, 40, 50]) . "<br>";
echo calculateSum([10, 20, -30, -40, 50]) . "<hr>";

// task 3
function compareFirstAndLastElement($arr)
{
  return count($arr) > 0 && $arr[0] == $arr[count($arr) - 1];
}

echo "<b>Task 3:</b><br>";
var_dump(compareFirstAndLastElement([10, 20, 40, 50]));
echo "<br>";
var_dump(compareFirstAndLastElement([10, 20, 40, 10]));
echo "<br>";
var_dump(compareFirstAndLastElement([12, 24, 35, 55]));
echo "<hr>";

// task 4
function checkFirstOrLast($arr, $givenVal)
{
  return $arr[0] == $givenVal || $arr[count($arr) - 1] == $givenVal;
}

echo "<b>Task 4:</b><br>";
var_dump(checkFirstOrLast([5, 20, 40, 10], 10));
echo "<br>";
var_dump(checkFirstOrLast([10, 20, 40, 10], 20));
echo "<br>";
var_dump(checkFirstOrLast([30, 20, 40, 30], 30));
echo "<br>";
var_dump(checkFirstOrLast([12, 24, 35, 55], 40));
echo "<hr>";

// task 5
$cookieName = "username";
$cookieValue = "Nadiia Kuzmich";
$expirationTime = time() + 3600;
// setcookie - defines a cookie to be sent along with the rest of 
// the HTTP headers. A cookie is often used to identify a user:
setcookie($cookieName, $cookieValue, $expirationTime);

echo "<b>Task 5:</b><br>";
echo "Cookie named '$cookieName' has been set with the value '$cookieValue'.<hr>";

// task 6
$cookieName = "username";

echo "<b>Task 6:</b><br>";
if (isset($_COOKIE[$cookieName])) {
  $cookieValue = $_COOKIE[$cookieName];
  echo "Value of cookie 'username': $cookieValue";
} else {
  echo "Cookie 'username' not found.";
}
echo "<hr>";

// task 7
// $cookieName = "username";
// setcookie($cookieName, "", time() - 3600);

echo "<b>Task 7:</b><br>";
echo "Cookie named 'username' has been deleted.<hr>";

// task 8
// session_start - creates a session or resumes the current one:
session_start();
$_SESSION["userid"] = 10020;

echo "<b>Task 8:</b><br>";
echo "Session variable 'userid' has been set with the value 10020.<hr>";

// task 9
// session_start(); - because a session is already active

echo "<b>Task 9:</b><br>";
if (isset($_SESSION["userid"])) {
  $userid = $_SESSION["userid"];
  echo "Value of session variable 'userid': $userid";
} else {
  echo "Session variable 'userid' not found.";
}
echo "<hr>";

// task 10
// session_start(); - because a session is already active
$_SESSION = []; // unset

// session_destroy - destroys all of the data associated 
// with the current session. It does not unset any of the 
// global variables associated with the session:
session_destroy(); // destroy

echo "<b>Task 10:</b><br>";
echo "Session destroyed. All session variables have been unset.<hr>";

// task 11
$cookieName = "my_Cookie";
$cookieValue = "Example_cookie_value";
$expirationTime = time() + 3600;
$secureOnly = true;

// setcookie(name, value, expire, path, domain, secure, httponly);
setcookie($cookieName, $cookieValue, $expirationTime, "/", "", $secureOnly, true);

echo "<b>Task 11:</b><br>";
echo "Secure cookie named 'my_Cookie' has been set.<hr>";

// task 12
$cookieName = "visited";

echo "<b>Task 12:</b><br>";
if (isset($_COOKIE[$cookieName])) {
  echo "Welcome back! You have visited before.";
} else {
  echo "Welcome! This is your first visit.";
}