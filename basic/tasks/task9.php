<?php

// task 1
$arr = ["abcd", "abc", "de", "hjjj", "g", "wer"];
$newArr = array_map('strlen', $arr);

echo "<b>Task 1:</b><br>";
echo "The shortest array length is " . min($newArr) .
  ". The longest array length is " . max($newArr) . '.';
echo "<hr>";

// task 2
echo "<b>Task 2:</b><br>";
// - implode - це вбудована функція, призначена для об'єднання 
// елементів масиву в рядок з використанням певного роздільника.
// - range - створює масив із діапазоном елементів. Діапазон, 
// який згенерує функція, задається параметрами: перший параметр 
// звідки генерувати, а другий - докуди. Третій необов'язковий 
// параметр функції задає крок.
echo implode(", ", range(200, 250, 4));
echo "<hr>";

// task 3
echo "<b>Task 3:</b><br>";
for ($i = 1; $i <= 10; $i++) {
  if ($i < 10) {
    echo "$i - ";
  } else {
    echo "$i";
  }
}
echo "<hr>";

// task 4
$sum = 0;

for ($i = 1; $i <= 30; $i++) {
  $sum += $i;
}

echo "<b>Task 4:</b><br>";
echo "The sum of the numbers 0 to 30 is $sum.";
echo "<hr>";