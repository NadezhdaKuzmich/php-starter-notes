<?php

// task 1
function randPass($upper = 1, $lower = 5, $numeric = 3, $other = 2)
{
  $passOrder = [];
  $passWord = '';

  for ($i = 0; $i < $upper; $i++) {
    // chr - генерує односимвольний рядок за заданим 
    // числом, код якого задано аргументом ascii:
    $passOrder[] = chr(rand(65, 90));
  }

  for ($i = 0; $i < $lower; $i++) {
    $passOrder[] = chr(rand(97, 122));
  }

  for ($i = 0; $i < $numeric; $i++) {
    $passOrder[] = chr(rand(48, 57));
  }

  for ($i = 0; $i < $other; $i++) {
    $passOrder[] = chr(rand(33, 47));
  }

  // shuffle здійснює перемішування масиву так, щоб 
  // його елементи йшли у випадковому порядку:
  shuffle($passOrder);

  foreach ($passOrder as $char) {
    $passWord .= $char;
  }

  return $passWord;
}

echo "<pre>";
echo "<b>Task 1:</b><br>";
echo "Generated Password 1: " . randPass();
echo "<br>";
echo "Generated Password 2: " . randPass(2, 4, 4, 1);
echo "<hr>";

echo "</pre>";