<?php

/*
Константа – іменована область пам'яті, значення якої не змінюється 
протягом роботи програми.

Constants, by definition, are variables that cannot be modified during 
the execution of the script. They are created using the const statement 
or the define function.

Convention: In PHP, the convention is to use uppercase letters for 
constant names, e.g., A_CONSTANT.

define:
• Реєстронезалежна
• Можна використовувати в циклах/виразах/функціях
• Oголошує константи під час виконання скрипту

const
• Завжди реєстрозалежна 
• Не можна використовувати вциклах/виразах/функціях 
• Oголошує константи під час компіляції
• Не може бути використана для динамічно оголошених констант.

const та define можуть зберігати тільки скалярні типи та array.
*/
$constants = get_defined_constants();

define('TEXT', 'Привіт я константа.');
// define('TEXT', false);
// define('TEXT', 25);
// define('TEXT', 14.89);

const PATH_TO_MY_PROJECT = "/some/path/to/my/project";
const CONSTANT_VALUE = "Constant PHP";
var_dump(CONSTANT_VALUE);
echo '<hr>';

// To check if constant is defined, use the defined function.
// Note: The defined function doesn’t care about the constant’s 
// value; it only cares if the constant exists or not. Even if 
// the value of the constant is null or false the function will 
// still return true.
define('DATA', [true, 'Привіт', 10, 55.12]);
$isData = defined('DATA');
var_dump($isData);
echo '<hr>';

define("GOOD", true);
if (defined("GOOD")) {
  echo "GOOD is defined.\n";
  echo GOOD ? "GOOD is true." : "GOOD is false.";
  echo '<hr>';
}

if (!defined("AWESOME")) {
  define("AWESOME", false);
  echo AWESOME ? "AWESOME is true." : "AWESOME is false.";
  echo '<hr>';
}

define("EARTH_IS_FLAT", false);
echo EARTH_IS_FLAT ? "Earth is flat.\n" : "Earth is round.\n";
echo '<hr>';

// If you don’t know the name of the constant in advance, 
// use the constant function:
define("HELLO", true);
$const1 = "HELLO";
if (constant($const1))
  echo "Hi.\n";
else
  echo "Bye.\n";
echo '<hr>';

// Note: Remember that you can not use a constant for a function:
// const TIME = time(); // fails with a fatal error! 

// To get all defined constants, including those created by PHP, 
// use the PHP function get_defined_constants:
$new_constants = get_defined_constants();
// echo '<pre>';
// var_dump($constants); // toooooo much
// echo '</pre>';

// To get only those constants that were defined by your app call 
// the function at the beginning and at the end of your script 
// (normally after the bootstrap process).
// array_diff_assoc function takes two parameters, compares the 
// keys and values of both and returns the difference. In this case, 
// it returned all the newly defined constants.
$myconstants = array_diff_assoc($new_constants, $constants);
//compares array keys and values, and returns the differences.
echo '<pre>';
var_export($myconstants);
echo '</pre>';