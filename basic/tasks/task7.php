<?php

// task 1
$myArray = ["red", "black", "green", "black", "white", "yellow"];

// array_values - повертає індексний масив з усіма значеннями масиву.
// array_unique - прибирає повторювані значення з масиву.
$sortedUniqueArray = array_values(array_unique($myArray));

echo "<pre>";
echo "<b>Task 1:</b><br>";
print_r($sortedUniqueArray);
echo "<hr>";

// task 2
$colors = [
  0 => "Red",
  1 => "Green",
  2 => "White",
  3 => "Black",
  4 => "Red",
];

$numbers = [
  0 => 100,
  1 => 200,
  2 => 100,
  3 => -10,
  4 => -10,
  5 => 0,
];

$uniq_colors = array_keys(array_flip($colors));
$uniq_numbers = array_keys(array_flip($numbers));

echo "<b>Task 2:</b><br>";
print_r($uniq_colors);
echo "<br>";
print_r($uniq_numbers);
echo "<hr>";

// task 3
function countValues($myArray, $match)
{
  $count = 0;

  foreach ($myArray as $key => $value) {
    if ($value == $match) {
      $count++;
    }
  }

  return $count;
}

$colors = ["c1" => "Red", "c2" => "Green", "c3" => "Yellow", "c4" => "Red"];
echo "<b>Task 3:</b><br>";
echo "Color 'Red' appears " . countValues($colors, "Red") . " time(s).";
echo "<hr>";

// task 4
$colors = ["Red", "Green", "Black", "White"];

echo "<b>Task 4:</b><br>";
print_r($colors);
echo "<br>";

// array_map - повертає масив, що містить елементи всіх зазначених 
// масивів після їх обробки функцією зворотного виклику.
// strtolower - перетворює рядок у нижній регістр.
$lowerColors = array_map("strtolower", $colors);
print_r($lowerColors);
echo "<br>";

// strtoupper - перетворює рядок у верхній регістр.
$upperColors = array_map("strtoupper", $colors);
print_r($upperColors);
echo "<hr>";

// task 5
$colors = ["Red ", " Green", "Black ", " White "];

echo "<b>Task 5:</b><br>";
print_r($colors);
echo "<br>";

// array_walk - обійде всі елементи масиву незалежно від позиції покажчика. 
// Застосовує задану користувачем функцію до кожного елемента масиву:
array_walk($colors, function (&$val) {
  // trim - повертає рядок з видаленими з початку і кінця рядка пробілами:
  $val = trim($val);
});
print_r($colors);
echo "<hr>";

// task 6
$testArray = [
  0 => 'example1',
  1 => 'Example11',
  2 => 'example10',
  3 => 'Example6',
  4 => 'example4',
  5 => 'EXAMPLE40',
  6 => 'example10'
];

// asort - сортує масив таким чином, що зберігаються відносини між ключами 
// і значеннями. Вона корисна, в основному, під час сортування асоціативних 
// масивів, коли важливо зберегти відношення ключ => значення:
asort($testArray, SORT_STRING | SORT_FLAG_CASE | SORT_NATURAL);
/*
Необов'язковий другий параметр flags змінює поведінку сортування 
і може набувати таких значень:
- SORT_REGULAR - звичайне порівняння елементів.
- SORT_NUMERIC - числове порівняння елементів.
- SORT_STRING - строкове порівняння елементів.
- SORT_LOCALE_STRING - порівняння елементів як рядків на основі 
поточного мовного стандарту. Прапор використовує мовний стандарт, 
який можна змінити функцією setlocale.
- SORT_NATURAL - порівняння елементів як рядка, використовуючи 
"природний порядок", наприклад natsort.
- SORT_FLAG_CASE - можна об'єднувати (побітове АБО) з SORT_STRING 
або SORT_NATURAL для сортування рядків без урахування регістру.
*/
echo "<b>Task 6:</b><br>";
print_r($testArray);
echo "<hr>";

// task 7
function searchValue($arr, $search)
{
  foreach ($arr as $key => $value) {
    // preg_match - повертає 1, якщо параметр відповідає переданому 
    // параметру, 0 якщо ні, або FALSE у разі помилки:
    if (preg_match("/$search/i", $value)) {
      echo $search . " has found in " . $key . "\n";
    } else {
      echo $search . " has not found in " . $key . "\n";
    }
  }
}

$exercises = ["part1" => "PHP array", "part2" => "PHP String", "part3" => "PHP Math"];
echo "<b>Task 7:</b><br>";
searchValue($exercises, "Math");
echo "<hr>";

// task 8
function getFileExtension($str)
{
  // explode - розбиває рядок у масив за певним роздільником:
  $str = explode(".", $str);

  // end - зсуває внутрішній покажчик масиву array на останній 
  // елемент і повертає його значення:
  $str = strtolower(end($str));

  return $str;
}

$file = "example.txt";
echo "<b>Task 8:</b><br>";
echo getFileExtension($file);
echo "<hr>";

// task 9
$arr = [
  'value1' => 3021,
  'value2' => 2365,
  'value3' => 5215,
  'value4' => 5214,
  'value5' => 2145
];

// arsort - сортує масив у зворотному порядку таким чином, 
// що зберігаються відносини між ключами і значеннями. Вона 
// корисна, здебільшого, під час сортування ассаоціативних 
// масивів, коли важливо зберегти відношення ключ => значення:
arsort($arr);

// key - повертає індекс поточної позиції масиву:
$keyOfMax = key($arr);

echo "<b>Task 9:</b><br>";
echo "Index of the highest value : $keyOfMax";
echo "<hr>";

// task 10
function rangeLetter($length)
{
  $letters = range('A', 'Z');
  $dataRange = [];
  $position = 0;


  foreach ($letters as $letter) {
    $position++;

    if ($position <= $length) {
      if ($position > 26) {
        break;
      }

      $dataRange[] = $letter;
    }
  }

  return $dataRange;
}

echo "<b>Task 10:</b><br>";
print_r(rangeLetter(12));
echo "<hr>";

// task 11
function rangeString($str)
{
  // preg_match_all - виконує глобальний пошук шаблону в рядку:
  preg_match_all("/[0-9]{1,2}/", $str, $out);
  return $out[0];
}

$testString = '1-2 18-20 9-11';
echo "<b>Task 11:</b><br>";
print_r(rangeString($testString));
echo "<hr>";

// task 12
// sort за значенням
$colors = ["Red", "Orange", "Black", "White"];

// rsort - сортує масив у зворотному порядку:
rsort($colors);

echo "<b>Task 12:</b><br>";
print_r($colors);
echo "<br>";

// sort - сортує масив за зростанням:
sort($colors);
print_r($colors);
echo "<br>";

// shuffle - перемішує елементи масиву у випадковому порядку:
shuffle($colors);
print_r($colors);
echo "<hr>";
echo "</pre>";