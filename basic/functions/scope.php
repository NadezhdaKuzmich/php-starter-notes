<?php

/*
There are two types of variables depending on the scope (or visibility):
1. local variables
- Variables that are defined within a function are inside a local scope 
hence are called local variables. These variables cannot be accessed 
outside of the function they are declared in.
2. global variables
- The variables defined outside of a function are referred to as global 
variables. A global variable can be accessed in any part of the program.
However, in order to modify a global variable within a function, we need 
to use the 'global' keyword. This is done by placing the 'global' keyword 
in front of the variable.

Note: You cannot assign a value to a variable in the same statement as the 
global keyword.
*/

// local variable
function foo()
{
  $number = 10;
  echo $number;
}

foo();
echo '<hr>';

// global variables
$num1 = 5;
$num2 = 2;

function multiply()
{
  global $num1; // Accessing global variables
  global $num2;
  $answer = $num1 * $num2;
  return $answer;
}

echo "num1 is: $num1 <br>";
echo "num2 is: $num2 <br>";
echo multiply() . '<hr>';

// Example of error:
// $var = 'hello';
// function giveError()
// {
//   echo $var; // Warning: Undefined variable $var
// }
// giveError();

// Using Variable Variables for Function Calls:
function sum($x, $y)
{
  return $x + $y;
}

$funcName = 'sum';
echo $funcName(2, 4);