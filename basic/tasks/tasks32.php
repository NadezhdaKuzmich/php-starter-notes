<?php

// task 1
function factorial($n)
{
  if ($n < 0)
    return -1;
  if ($n == 0)
    return 1;
  return $n * factorial($n - 1);
}

echo "<b>Task 1:</b><br>";
echo factorial(5);
echo "<hr>";

// task 2
echo "<b>Task 2:</b><br>";
echo hebrev("What ?????");
echo "<hr>";

// task 3
$str = "Hello, welcome to PhP.";

echo "<b>Task 3:</b><br><pre>";
print_r(explode(" ", $str));
echo "</pre><hr>";

// task 4
$str1 = "Hi everyone! Welcome to PhP";
$del = "e";

$token = strtok($str1, $del);
echo "<b>Task 4:</b><br>";
while ($token !== false) {
  echo "$token <br>";
  $token = strtok($del);
}
echo "<hr>";

// task 5
$nums = [1, 3, 5, 7, 9];

echo "<b>Task 5:</b><br>";
$last = end($nums);
echo "$last <hr>";

// task 6
$colors = ["Blue", "Red", "Black", "Green", "Gray", "White"];
echo "<b>Task 6:</b><br><pre>";
echo "Arraylist: ";
print_r($color);
$removed = array_shift($colors);
echo "</br>Removed element from array is: ";
print_r($removed);
echo "</br>Updated arraylist: ";
print_r($colors);
echo "</pre><hr>";

// task 7
$phoneNumbers = [
  "Alex" => "415-235-8573",
  "Jessica" => "415-492-4856",
];

echo "<b>Task 7:</b><br>";
if (array_key_exists("Alex", $phoneNumbers)) {
  echo "Alex's phone number is " . $phoneNumbers["Alex"] . "<br />";
} else {
  echo "Alex's phone number is not in the phone book!<br />";
}

if (array_key_exists("Michael", $phoneNumbers)) {
  echo "Michael's phone number is " . $phoneNumbers["Michael"] . "<br />";
} else {
  echo "Michael's phone number is not in the phone book!<br />";
}
echo "<hr>";