<?php

/*
Операції порівняння

For basic equality testing, the equal operator '==' is used. 
For more comprehensive checks, use the identical operator '==='.

Spaceship Operator 
The spaceship operator (<=>) is a special kind of comparison operator. 
It returns:
1. if first expression is lesser than the second expression -> '-1'.
2. if the first expression is greater than the second expression -> '1'.
3. if the first expression is equal to the second expression -> '0'.

Remember: 
Objects are not comparable, and doing so will result in undefined behavior.
*/

// дорівнює (після перетворення типів)
echo '2 == "2" ';
var_dump(2 == "2");
echo '<br>';

echo '2 == "абв" ';
var_dump(2 == "абв");
echo '<br>';

echo '7 == 7 ';
var_dump(7 == 7);
echo '<br>';

// тотожно дорівнює (має той самий тип)
echo '2 === "2" ';
var_dump(2 === "2");
echo '<br>';

echo '5 === 5 ';
var_dump(5 === 5);
echo '<br>';

// не дорівнює (після перетворення типів)
echo '2 != 1  ';
var_dump(2 != 1);
echo '<br>';

// тотожно не дорівнює (має той самий тип)
echo '5 !== "2"  ';
var_dump(5 !== "2");
echo '<br>';

// менше (суворо)
echo '2 < 5  ';
var_dump(2 < 5);
echo '<br>';

echo '5 < 5  ';
var_dump(5 < 5);
echo '<br>';

// більше (суворо)
echo '2 > 5  ';
var_dump(2 > 5);
echo '<br>';

// менше або дорівнює
echo '2 <= 5  ';
var_dump(2 <= 5);
echo '<br>';

echo '2 <= 2  ';
var_dump(2 <= 2);
echo '<br>';

// більше або дорівнює
echo '13 >= 7 ';
var_dump(13 >= 7);
echo '<hr>';

// Spaceship Operator 
// Integers
echo (1 <=> 1) . ', '; //prints 0
echo (1 <=> 2) . ', '; //prints -1
echo (2 <=> 1) . '<br>'; //prints 1
// Floats
echo (1.5 <=> 1.5) . ', '; //prints 0
echo (1.5 <=> 2.5) . ', '; //prints -1
echo (2.5 <=> 1.5) . '<br>'; //prints 1
// Strings
echo ("a" <=> "a") . ', '; //prints 0
echo ("a" <=> "b") . ', '; //prints -1
echo ("b" <=> "a") . '<hr>'; //prints 1

// <>  = not equal
function compare($a, $b)
{
  if ($a <> $b) {
    return "Not equal";   // 1
  } else {
    return "Equal";       // 0
  }
}

echo compare(1, 1) . '<br>';
echo compare(1, 2) . '<br>';
echo compare(2, 1) . '<br>';