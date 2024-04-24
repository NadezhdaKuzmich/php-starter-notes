<?php

// task 1
function calcVat($price, $vat)
{
  echo "Price: $price" . '<br>';
  echo "Vat: $vat" . '<br>';

  $calculatedPrice = ($price * $vat) + $price;
  return $calculatedPrice;
}

echo "<b>Task 1:</b><br>";
echo 'Total price: ' . calcVat(100, 0.21) . '<br><br>';
echo 'Total price: ' . calcVat(220, 0.21) . '<br><br>';
echo 'Total price: ' . calcVat(1000, 0.21) . '<hr>';

// task 2
$num1 = 20;
$num2 = 5;

function addNumbers($x, $y)
{
  return $x + $y;
}

function subtractNumbers($x, $y)
{
  return $x - $y;
}

function multiplyNumbers($x, $y)
{
  return $x * $y;
}

function divideNumbers($x, $y)
{
  return $x / $y;
}

echo "<b>Task 2:</b><br>";
echo "Division of <i>$num1</i> and <i>$num2</i> is: <b>" . divideNumbers($num1, $num2) . '</b><br>';
echo "Addition of <i>$num1</i> and <i>$num2</i> is: <b>" . addNumbers($num1, $num2) . '</b><br>';
echo "Subtraction of <i>$num1</i> and <i>$num2</i> is: <b>" . subtractNumbers($num1, $num2) . '</b><br>';
echo "Multiplicity of <i>$num1</i> and <i>$num2</i> is: <b>" . multiplyNumbers($num1, $num2) . '</b><hr>';
