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
echo "Division of $num1 and $num2 is " . divideNumbers($num1, $num2) . '.<br>';
echo "Addition of $num1 and $num2 is " . addNumbers($num1, $num2) . '.<br>';
echo "Subtraction of $num1 and $num2 is " . subtractNumbers($num1, $num2) . '.<br>';
echo "Multiplicity of $num1 and $num2 is " . multiplyNumbers($num1, $num2) . '.<hr>';

// task 3
function swapNumbers($num1, $num2)
{
  $temp = $num1;
  $num1 = $num2;
  $num2 = $temp;

  echo "After swapping num 1 = $num1, num 2 = $num2<br>";
}

echo "<b>Task 3:</b><br>";
swapNumbers(1, 2);
swapNumbers(2, 4);
echo '<hr>';

// task 4
function evenOrNot($num)
{
  echo ($num % 2 == 0 ? "$num is even" : "$num is odd") . '<br>';
}

echo "<b>Task 4:</b><br>";
evenOrNot(27);
evenOrNot(12);
echo '<hr>';

// task 5
function isPrime($num)
{
  $prime = true;

  for ($i = 2; $i < $num / 2; $i++) {
    if ($num == 1 || $num % $i == 0) {
      $prime = false;
      break;
    }
  }

  return $prime ? "$num is prime" : "$num is NOT prime";
}

echo "<b>Task 5:</b><br>";
echo isPrime(7) . '<br>';
echo isPrime(9) . '<br>';
echo isPrime(11) . '<br>';
echo isPrime(27) . '<br>';
echo '<hr>';