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

// task 5
echo "<b>Task 5:</b><br>";
for ($i = 1; $i <= 5; $i++) {
  for ($j = 1; $j <= $i; $j++) {
    echo "*";

    if ($j < $i) {
      echo " ";
    }
  }

  echo "<br>";
}
echo "<hr>";

// task 6
$n = 5;

echo "<b>Task 6:</b><br>";
for ($i = 1; $i <= $n; $i++) {
  for ($j = 1; $j <= $i; $j++) {
    echo " * ";
  }
  echo "<br>";
}

for ($i = $n; $i >= 1; $i--) {
  for ($j = 1; $j <= $i; $j++) {
    echo " * ";
  }
  echo "<br>";
}
echo "<hr>";

// task 7
$num = 6;
$result = 1;

for ($i = 1; $i < $num; $i++) {
  $result *= ($i + 1);
}

echo "<b>Task 7:</b><br>";
echo "The factorial of  $num = $result";
echo "<hr>";

// task 8
echo "<b>Task 8:</b><br>";
for ($i = 0; $i < 10; $i++) {
  for ($j = 0; $j < 10; $j++) {
    echo "$i$j, ";
  }
}
echo "<hr>";
