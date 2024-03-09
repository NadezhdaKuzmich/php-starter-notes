<?php

/*
Цикл foreach
Конструкція foreach надає простий спосіб перебору масивів.
Foreach працює тільки з масивами та об'єктами, і буде генерувати 
помилку при спробі використання зі змінними інших типів або 
неініціалізованими змінними.

foreach (масив as значення) { 
  тіло_цикла;
}

foreach (масив as ключ => значення) { 
  тіло_цикла;
}
*/

$arr = ["one", "two", "three"];

foreach ($arr as $value) {
  echo "Значення: $value<br>";
}
echo '<hr>';

$nums = [1, 2, 3, 4];

foreach ($nums as $num) {
  if ($num % 2 === 0) {
    echo "$num | ";
  }
}
echo '<br>';

foreach ($nums as $num) {
  if ($num % 2 !== 0) {
    continue;
  }
  echo "$num | ";
}
echo '<hr>';

$a = [
  "one" => 1,
  "two" => 2,
  "three" => 3,
  "seventeen" => 17
];

foreach ($a as $k => $v) {
  echo "[$k] => $v <br>";
}
echo '<hr>';

$arr = [1, 2, 3, 4];

foreach ($arr as &$value) {
  $value *= 2;
}

var_dump($arr);
echo '<hr>';

$persons = [
  "Ігор" => "25",
  "Тарас" => "17",
  "Тетяна" => "21"
];

foreach ($persons as $name => $age) {
  echo "Ім'я: $name <br> Вік: $age <br><br>";
}