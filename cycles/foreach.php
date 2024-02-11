<?php

/*
Цикл foreach
Конструкція foreach надає простий спосіб перебору масивів.
foreach (масив as значення) { 
  тіло_цикла;
}
foreach (масив as ключ => значення) { 
  тіло_цикла;
}
*/

$nums = [1, 2, 3, 4];

foreach ($nums as $num) {
  if ($num % 2 === 0) {
    echo $num . "<br>";
  }
}

foreach ($nums as $num) {
  if ($num % 2 !== 0) {
    continue;
  }

  echo $num . "<br>";
}

$persons = [
  "Ігор" => "25",
  "Тарас" => "17",
  "Тетяна" => "21"
];

foreach ($persons as $name => $age) {
  echo "Ім'я: " . $name . ". Вік: " . $age . ". <br>";
}