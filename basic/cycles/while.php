<?php

/*
Цикл while виконує тіло циклу повторно до тих пір, поки вираз у самому while є true.
while (логічне_вираження) {
  тіло_циклу;
}
*/

// Цикл з передумовою while:
$i = 0;

while ($i < 10) {
  $i++;
  echo $i . "<br>";
}
echo "<br>";

// continue:
$i = 0;

while ($i < 10) {
  $i++;

  if ($i == 5) {
    continue;
  }

  echo $i . "<br>";
}
echo "<br>";

// break:
$i = 0;

while ($i < 10) {
  $i++;

  if ($i == 5) {
    break;
  }

  echo $i . "<br>";
}