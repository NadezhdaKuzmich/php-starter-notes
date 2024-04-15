<?php

/*
Defining Custom Exceptions:
PHP provides the functionality to create custom exception handlers. 
It allows you to give separate exception block for each type of exception.
The class must be an extension of the built-in Exception class since it is 
the base class. The custom exception class inherits all the objects, methods 
and properties, from PHP’s Exception class. You can also add custom objects 
to this new extended exception class.
*/

class DecelerationException extends Exception
{
}

class TimeException extends Exception
{
}

function acceleration($finalSpeed, $initialSpeed, $time)
{
  if ($time <= 0) {
    throw new TimeException('Time cannot be negative or zero.');
  }
  if ($initialSpeed > $finalSpeed) {
    throw new DecelerationException('It is deceleration.');
  } else {
    $result = ($finalSpeed - $initialSpeed) / $time;
    echo "( $finalSpeed - $initialSpeed ) / $time = $result<br>";
  }
}

try {
  acceleration(20, 10, 2);
  // acceleration(15, 20, 5);
  acceleration(30, 10, -4);
  echo 'All calculations done!'; // this line will not execute
} catch (DecelerationException $e) {
  echo "Caught deceleration exception: " . $e->getMessage() . "<br>";
} catch (TimeException $e) {
  echo "Caught time exception: " . $e->getMessage() . "<br>";
}