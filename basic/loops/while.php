<?php

/*
Цикл while виконує тіло циклу повторно до тих пір, поки вираз у самому while є TRUE.
Якщо умова дорівнює FALSE, з самого початку, то цикл не виконається жодного разу.

while (логічне_вираження) {
  тіло_циклу;
}

breack
- часто буває зручно при виникненні деяких умов мати можливість 
достроково завершити цикл. Таку можливість надає оператор break. 
Він працює з такими конструкціями як: while, do while, for, foreach 
або switch.

continue 
- використовується всередині циклічних структур для пропуску частини 
поточної ітерації циклу, що залишилася, і, за дотримання умов, початку 
наступної ітерації.
*/

// Цикл з передумовою while:
$i = 0;
while ($i < 10) {
  $i++;
  echo "$i | ";
}
echo "<hr>";

$i = 1;
while ($i <= 10) {
  echo $i++ . ' | ';
}
echo "<hr>";

$i = 1;
while ($i <= 10):
  echo "$i | ";
  $i++;
endwhile;
echo "<hr>";


// continue:
$i = 0;
while ($i < 10) {
  $i++;

  if ($i == 5) {
    continue;
  }

  echo "$i | ";
}
echo "<hr>";

// break:
$i = 0;
while ($i < 10) {
  $i++;

  if ($i == 5) {
    break;
  }

  echo "$i | ";
}
echo "<hr>";

$x = 4;
$y = 0;
while ($y <= 10) {
  $y += $x;
  $x += 1;
}
echo "The value of 'x' is: $x <br>";
echo "The value of 'y' is: $y <hr>";

$i = 0;
while ($i < 10) {
  $i = $i * 2;
  echo "Value of i is: $i <br>";
  $i++;
}
echo "Final value of i is: $i <hr>";

$num = 1;
$answer_string = "";

while ($num < 10) {
  for ($i = 1; $i <= 10; $i++) {
    $result = $num * $i;
    echo "$num x $i  = $result <br>";
    // strval - повертає строкове значення змінної.
    $answer_string .= strval($result) . " ";
  }

  echo "<br> Answers: $answer_string <hr>";
  $answer_string = "";
  $num++;
}