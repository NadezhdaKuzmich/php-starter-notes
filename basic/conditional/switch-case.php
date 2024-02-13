<?php

/*
Конструкція switch-case є альтернативою використанню конструкції if-elseif-else.
switch (вираз) 
  case вираз:
    інструкція_1; 
    break; 
  case вираз:
    інструкція_2; 
    break; 
  default:
    інструкція_3;
*/

// Инструкция switch-case
$result = 2 + 2;

switch ($result) { // == 
  case 3:
    echo "Замало";
    break;

  case 4:
    echo "Точнісінько!";
    break;

  case 5:
    echo "Перебір";
    break;

  default:
    echo "Немає таких значень";
}
echo "<br>";

// Інструкція switch-case, угруповання case
$result2 = 1 + 2;

switch ($result2) {
  case 4:
    echo "Правильно!";
    break;

  case 3: // (*) групуємо обидва case
  case 5 - 3:
    echo "Неправильно!" . "<br>";
    echo "Може варто все перевіряти ще раз?" . "<br>";
    break;

  default:
    echo "Результат виглядає дивним. Чесно.";
}