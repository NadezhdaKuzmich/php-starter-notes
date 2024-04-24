<?php

function calculator($num1, $num2, $sign)
{
  switch ($sign) {
    case '+':
      $result = $num1 + $num2;
      break;
    case '-':
      $result = $num1 - $num2;
      break;
    case '*':
      $result = $num1 * $num2;
      break;
    case '/':
      $result = $num1 / $num2;
      break;
    case '%':
      $result = $num1 % $num2;
      break;
    case '**':
      $result = $num1 ** $num2;
      break;
    default:
      $result = null;
      return "<b>Sorry, the value \" $sign \" is not acceptable!</b>";
  }

  if ($result) {
    return "$num1 $sign $num2 = $result";
  }
}

echo calculator(2, 2, '+') . '<br>';
echo calculator(9, 5, '-') . '<br>';
echo calculator(8, 4, '/') . '<br>';
echo calculator(3, 2, '*') . '<br>';
echo calculator(9, 2, '%') . '<br>';
echo calculator(3, 3, '**') . '<br>';
echo calculator(7, 1, '#') . '<br>';
