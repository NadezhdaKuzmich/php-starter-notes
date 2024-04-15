<?php
function distance($speed, $time)
{
  if ($time <= 0) {
    throw new Exception('Time cannot be zero or negative.');
  } else {
    $d = $speed * $time;
    echo "$speed * $time = $d<br>";
  }
}

try {
  distance(10, 2);
  distance(15, 3);
  distance(30, -4); // catch error
  echo 'All calculations done!'; // doesn't work
} catch (Exception $e) {
  echo "Caught exception: " . $e->getMessage() . "<br>";
}