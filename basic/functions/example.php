<?php

function calculator($num1 = 1, $num2 = 1, $sign = '*')
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

echo calculator() . '<hr>';
echo calculator(2) . '<hr>';
echo calculator(4, 2) . '<hr>';
echo calculator(2, 2, '+') . '<hr>';
echo calculator(9, 4, '-') . '<hr>';
echo calculator(8, 4, '/') . '<hr>';
echo calculator(3, 2, '*') . '<hr>';
echo calculator(9, 2, '%') . '<hr>';
echo calculator(3, 3, '**') . '<hr>';
echo calculator(7, 1, '#') . '<hr>';