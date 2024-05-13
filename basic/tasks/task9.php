<?php

// task 1
$arr = ["abcd", "abc", "de", "hjjj", "g", "wer"];
$newArr = array_map('strlen', $arr);

echo "<pre>";
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
echo implode(",", range(200, 250, 4));
echo "<hr>";
echo "</pre>";
