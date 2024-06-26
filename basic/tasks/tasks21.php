<?php

// task 1
function tail($items)
{
  return count($items) > 1 ? array_slice($items, 1) : $items;
}

echo "<b>Task 1:</b><br>" . "<pre>";
print_r(tail([1, 2, 3]));
echo "</pre>" . "<hr>";

// task 2
function take($items, $count = 1)
{
  return array_slice($items, 0, $count);
}

echo "<b>Task 2:</b><br>" . "<pre>";
print_r(take([1, 2, 3], 1));
echo "<br>";
print_r(take([1, 2, 3, 4, 5], 2));
echo "</pre>" . "<hr>";

// task 3
function without($items, ...$params)
{
  return array_values(array_diff($items, $params));
}

echo "<b>Task 3:</b><br>" . "<pre>";
print_r(without([2, 1, 2, 3], 1, 2));
echo "</pre>" . "<hr>";

// task 4
function orderBy($items, $attr, $order)
{
  $sortedItems = [];

  foreach ($items as $item) {
    $key = $item[$attr];
    $sortedItems[$key] = $item;
  }

  if ($order === 'desc') {
    // krsort - сортує масив за ключами у порядку зменшення, 
    // зберігаючи відношення між ключами і значеннями:
    krsort($sortedItems);
  } else {
    // ksort - сортує масив за ключами у порядку зростання, 
    // зберігаючи відношення між ключами і значеннями:
    ksort($sortedItems);
  }

  return array_values($sortedItems);
}

echo "<b>Task 4:</b><br>" . "<pre>";
print_r(
  orderBy(
    [
      ['id' => 2, 'name' => 'Red'],
      ['id' => 3, 'name' => 'Black'],
      ['id' => 1, 'name' => 'Green']
    ],
    'id',
    'desc'
  )
);
echo "</pre>" . "<hr>";

// task 5
function approximatelyEqual($number1, $number2, $epsilon = 0.001)
{
  // abs - повертає абсолютну величину числа. Якщо в параметр передано 
  // аргумент у вигляді числа float, функція також повертає число float, 
  // інакше - ціле число оскільки у float часто більший діапазон значень, 
  // ніж у int:
  return abs($number1 - $number2) < $epsilon;
}

echo "<b>Task 5:</b><br>";
var_dump(approximatelyEqual(10.0, 10.00001));
echo "<br>";
var_dump(approximatelyEqual(10.0, 10.01));
echo "<hr>";

// task 6
function startsWith($str, $substr)
{
  // strpos - повертає позицію першого входження підрядка в інший рядок. 
  // Першим параметром функція приймає рядок, у якому здійснюється пошук, 
  // другим параметром - підрядок, який слід шукати.
  return strpos($str, $substr) === 0;
}

echo "<b>Task 6:</b><br>";
var_dump(startsWith('Hi, this is me', 'Hi'));
echo "<br>";
var_dump(startsWith('Hello, this is me', 'Hi'));
echo "<hr>";

// task 7
function countVowels($string)
{
  // preg_match_all - шукає в рядку всі збіги з шаблоном і поміщає результат 
  // у масив matches у порядку, визначеному комбінацією прапорів flags. Після 
  // знаходження першої відповідності наступні пошуки будуть здійснюватися не 
  // з початку рядка, а від кінця останнього знайденого входження. Повертає 
  // кількість знайдених входжень шаблону, яка може бути і нулем або FALSE, 
  // якщо під час виконання виникли будь-які помилки:
  $count = preg_match_all('/[aeiou]/i', $string, $matches);
  print_r($matches);

  return $count;
}

echo "<b>Task 7:</b><br>" . "<pre>";
echo '<br>Count of vowels: ' . countVowels('sampleInput');
echo "</pre>" . "<hr>";

// task 8
function decapitalize($string, $upperRest = false)
{
  // lcfirst - перетворює перший символ рядка в нижній регістр:
  return lcfirst($upperRest ? strtoupper($string) : $string);
}

$str = 'Python';

echo "<b>Task 8:</b><br>";
echo $str;
echo "<br>";
echo decapitalize($str);
echo "<br>";
echo decapitalize($str, true);
echo "<hr>";

// task 9
function variadicFunc($operands)
{
  $sum = 0;

  foreach ($operands as $operand) {
    $sum += $operand;
  }

  return $sum;
}

echo "<b>Task 9:</b><br>";
echo variadicFunc([1, 2]);
echo "<br>";
echo variadicFunc([1, 2, 3, 4]);
echo "<hr>";

// task 10
function test($s)
{
  if (strlen($s) >= 2 && substr($s, 0, 2) == "if") {
    return $s;
  }

  return "if " . $s;
}

echo "<b>Task 10:</b><br>";
echo test("if else") . "<br>";
echo test("else") . "<br>";
echo test("if") . "<hr>";

// task 11
function returnSubstr($s, $count)
{
  return substr($s, 0, $count) . substr($s, $count + 1, strlen($s) - $count);
}

echo "<b>Task 11:</b><br>";
echo returnSubstr("Python", 1) . "<br>";
echo returnSubstr("Python", 0) . "<br>";
echo returnSubstr("Python", 4) . "<hr>";

// task 12
function changeLastChar($str)
{
  return strlen($str) > 1
    ? substr($str, strlen($str) - 1) . substr($str, 1, strlen($str) - 2) . substr($str, 0, 1)
    : $str;
}

echo "<b>Task 12:</b><br>";
echo changeLastChar("abcd") . "<br>";
echo changeLastChar("a") . "<br>";
echo changeLastChar("xy");