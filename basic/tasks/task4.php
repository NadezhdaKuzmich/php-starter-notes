<?php

// task 1
$numbers = [
  'Milk' => 2,
  'Cheese' => 4,
  '7-up' => 3
];

echo '<pre>';
echo "<b>Task 1:</b><br>";
// asort - cортує масив у порядку зростання, зберігаючи асоціацію індексів.
asort($numbers);
print_r($numbers);

// arsort - cортує масив у порядку убування, зберігаючи асоціацію індексів.
arsort($numbers);
print_r($numbers);
echo '<hr>';

// task 2
// mktime - повертає тимчасову мітку Unix відповідно до переданих аргументів 
// або false, якщо тимчасову мітку не можна представити у вигляді цілого числа.
$targetDays = mktime(0, 0, 0, 07, 05, 2024);

// time - повертає поточний час у форматі Unix timestamp.
$today = time();

$differenceDays = $targetDays - $today;
$days = (int) ($differenceDays / 86400);

echo "<b>Task 2:</b><br>";
echo "My birthday is in $days days!";
echo '<hr>';

// task 3
$randNumber = rand(0, 100) / 10;
echo "<b>Task 3:</b><br>";
echo "Random float number: $randNumber";
echo '<hr>';

// task 4
$str = "My name is Nadiia. I'm 27 years old and I live in Poland. 
I'm getting pretty old. I like PHP, because it's a programming language...";

function checkLowerCase($str)
{
  return strtolower($str);
}

echo "<b>Task 4:</b><br>";
echo checkLowerCase($str);
echo '<hr>';

// task 5
function searchText($str)
{
  $punctuation = 0;
  for ($i = 0; $i < strlen($str); $i++) {
    if ($str[$i] == "." || $str[$i] == ",") {
      $punctuation++;
    }
  }

  echo "The text has $punctuation punctuation.";
}

echo "<b>Task 5:</b><br>";
searchText($str);
echo '<hr>';

// task 6
$onlyNumbers = [8, 12, 24, 83, 92, 6, 44, 67, 78, 51, 34];

echo "<b>Task 3:</b><br>";
echo 'The lowest value is <b>' . min($onlyNumbers) . '</b> and the highest value is <b>' . max($onlyNumbers) . '</b>';
echo '<hr>';

echo '</pre>';