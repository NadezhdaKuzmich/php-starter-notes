<?php

define('SUM', '+');
define('DIFF', '-');
define('MULT', '*');
define('DIV', '/');
define('EXP', '**');

$operator = SUM;

$a = 10;
$b = 2;

$result = null;

switch ($operator) {
  case SUM:
    $result = $a + $b;
    break;

  case DIFF:
    $result = $a - $b;
    break;

  case MULT:
    $result = $a * $b;
    break;

  case DIV:
    $result = $a / $b;
    break;

  case EXP:
    $result = $a ** $b;
    break;

  default:
    echo "Invalid operation selected";
}

if (isset($result)) {
  echo "Result: $a $operator $b = $result";
}