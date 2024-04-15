<?php

/*
PHP’s Exception class also provides the following 
methods for detailed information:
  
- getCode()
Returns an integer which can be used to identify the exception.

- getFile()
Returns the absolute path to the file where an exception occurred.

- getLine()
Returns the line number of the line of code which threw the exception.

- getTraceAsString()
Returns a stack trace in the form of a string. Stack traces contain 
information about all of the functions that are running at a given 
moment. The stack trace provided by this method has information about 
the stack at the time that the exception was thrown.
*/

function division($num1, $num2)
{
  if ($num2 == 0) {
    throw new Exception('Divisor is zero');
  } else {
    $result = $num1 / $num2;
    echo "$num1 / $num2 = $result<br>";
  }
}

try {
  division(10, 2);
  division(30, -4);
  division(15, 0);
  echo 'All calculations done!'; // this line will not execute
} catch (Exception $e) {
  echo "Caught exception: " . $e->getMessage() . "<hr>";
}

// getCode
try {
  throw new Exception("An error occurred", 120);
} catch (Exception $e) {
  echo "Error code: " . $e->getCode() . "<hr>";
}

// getFile
try {
  throw new Exception("An error occurred");
} catch (Exception $e) {
  echo "Error in this file: " . $e->getFile() . "<hr>";
}

// getLine
try {
  throw new Exception("An error occurred");
} catch (Exception $e) {
  echo $e->getLine() . "<hr>";
}

// getTraceAsString
function myFunction($num)
{
  throw new Exception("An error occurred");
}

try {
  myFunction(5);
} catch (Exception $e) {
  print_r($e->getTraceAsString());
}