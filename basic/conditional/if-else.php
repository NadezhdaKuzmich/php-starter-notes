<?php

/*
Керуючі конструкції:

Інструкція if-else
- Умовна конструкція if-else дозволяє направити роботу програми 
в залежності від умови по одному з можливих шляхів.

if (логічне_вираз) {
  інструкція_1;
} else {
  інструкція_2;
}

Note: also the left curly brace {. This symbol denotes a block of 
multiple lines of code. Without it, the conditional would only refer 
to the statement immediately following it. It is a good practice to 
always use the braces.
*/

// Інструкція if
$a = 10;
$b = 5;

if ($a > $b) {
  echo $a . " більше ніж " . $b;
}
echo "<br>";

// Інструкція if-else
$age = 20;

if ($age > 18) {
  echo "Вам більше 18 років";
} else {
  echo "Вам ще не виповнилося 18 років";
}