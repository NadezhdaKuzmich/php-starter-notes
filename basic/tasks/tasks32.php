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
print_r($colors);
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

// task 8
echo "<b>Task 8:</b><br><pre>";
print_r(array_keys($phoneNumbers));
print_r(array_values($phoneNumbers));
echo "</pre><hr>";

// task 9
$filename = "image.png";
$extension = substr($filename, strlen($filename) - 3);

echo "<b>Task 9:</b><br>";
echo "The extension of the file is $extension";
echo "<hr>";

// task 10
$oddNums = [1, 3, 5, 7, 9];
$evenNums = [2, 4, 6, 8, 10];
$allNums = array_merge($oddNums, $evenNums);

echo "<b>Task 10:</b><br>";
print_r($allNums);
echo "<hr>";

// task 11
$nums = [1, 2, 3, 4, 5];
$firstItem = reset($nums);

echo "<b>Task 11:</b><br>";
echo "$firstItem<hr>";

// task 12
function sum(...$nums)
{
  $sum = 0;
  foreach ($nums as $n) {
    $sum += $n;
  }
  return $sum;
}

echo "<b>Task 12:</b><br>";
echo sum(1, 2, 3, 4);