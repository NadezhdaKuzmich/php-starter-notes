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

break is used at the end of each block to prevent the code from running into the 
next case automatically.
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
echo "<hr>";

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
echo "<hr>";

$x = 2;
switch ($x) {
  case 1:
    echo "Your value for case 1 is $x";
    break;
  case 2:
    echo "Your value for case 2 is $x";
    break;
  default:
    echo "Your value in default case is $x";
    break;
}
echo "<hr>";

function calculate($num1, $num2, $operator)
{
  echo "Number 1 is: $num1 <br>";
  echo "Number 2 is: $num2 <br>";
  echo "Operator is: $operator <br>";

  try {
    switch ($operator) {
      case "+":
        $result = $num1 + $num2;
        break;

      case "-":
        $result = $num1 - $num2;
        break;

      case "*":
        $result = $num1 * $num2;
        break;

      case "/":
        $result = $num1 / $num2;
        break;
        
      default:
        echo "Wrong operator";
    }
    echo "Result: $num1 $operator $num2 = $result";
  } catch (DivisionByZeroError) {
    echo "Error! You got division by zero error!";
  } catch (TypeError) {
    echo "Error! You got type error!";
  } finally {
    echo "<hr>";
  }
}

calculate(5.5, 6.5, "+");
calculate(4, 9, "*");
calculate(2, 0, "/");
calculate("Hello", "World", "-");