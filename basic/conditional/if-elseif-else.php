<?php

/*
Умовна конструкція if-elseif-else 
дозволяє направити роботу програми в залежності 
від умови по одному з кількох можливих шляхів.
*/

// Інструкція if-elseif-else
$hour = 12;
if ($hour < 12) {
  echo "Ще ранок!";
} elseif ($hour == 12) {
  echo "Зараз опівдень!";
} else {
  echo "Уже вечір!";
}
echo "<hr>";

$money = 32;
if ($money < 20) {
  echo "У вас недостатньо грошей";
} elseif ($money < 25) {
  echo "У вас, як і раніше, недостатньо грошей";
} elseif ($money > 30) {
  echo "У вас достатньо грошей для придбання цього товару";
} else {
  echo "Перегляньте інші товари";
}
echo "<hr>";

$score = 50;
if ($score > 100) {
  echo "Error: the score is greater than 100!\n";
} else if ($score < 0) {
  echo "Error: the score is less than 0!\n";
} else if ($score >= 50) {
  echo "Pass!\n";
} else {
  echo "Fail!\n";
}
echo "<hr>";

$a = 5;
$b = 10;
// Correct Method:
if ($a > $b):
  echo $a . " is greater than " . $b;
elseif ($a == $b): // Note the combination of the words.
  echo $a . " equals " . $b;
else:
  echo $a . " is neither greater than or equal to " . $b;
endif;

// Incorrect Method:
// if ($a > $b):
//     echo $a." is greater than ".$b;
// else if ($a == $b): // Will not compile.
//     echo "The above line causes a parse error.";
// endif;

// The parser doesn't handle mixing alternative if syntaxes as reasonably as possible.
// The following codes are illegal (as it should be):
// $a = true;
// if($a) {
//   echo $a;
// }
// else:
//   echo $c;
// endif;

// if($a):
//   echo $a;
// else {
//   echo $c;
// }