<?php

// task 1
echo "<b>Task 1:</b><br>";
echo round(1.65, 1, PHP_ROUND_HALF_UP) . '<br>';     // Rounds up to nearest even number: 1.7
echo round(1.65, 1, PHP_ROUND_HALF_DOWN) . '<br>';   // Rounds down to nearest even number: 1.6
echo round(-1.54, 1, PHP_ROUND_HALF_EVEN) . '<hr>';  // Rounds to nearest even number: -1.5

// task 2
// getrandmax - повертає максимально можливе випадкове число.
// rand - повертає псевдовипадкове ціле число в діапазоні від 
// 0 до значення, яке повертає функція getrandmax, якщо функцію 
// викликали без параметрів min і max:
$x = rand(10e12, 10e16);

echo "<b>Task 2:</b><br>";
// base_convert - перетворює числа між довільними системами числення:
echo base_convert($x, 10, 2) . '<hr>';

// task 3
$date = "2024-05-12";
$newDate = date("d-m-Y", strtotime($date));

echo "<b>Task 3:</b><br>";
echo $newDate . '<hr>';

// task 4
$dates = ['2024-02-01', '2024-02-02', '2024-02-03'];

echo "<b>Task 4:</b><br>";
echo "Latest Date: " . max($dates) . '<br>';
echo "Earliest Date: " . min($dates) . '<hr>';

// task 5
$d = 'A00';

echo "<b>Task 5:</b><br>";
for ($i = 0; $i < 5; $i++) {
  echo ++$d . '<br>';
}

echo "<hr>";

// task 6
echo "<b>Task 6:</b><br>";
echo date('h:i:s') . '<br>';

// Sleep for 5 seconds
// sleep(5);
// echo date('h:i:s');
echo "<hr>";

// task 7
echo "<b>Task 7:</b><br>";

try {
  $numerator = 100;
  $denominator = 0;

  if ($denominator === 0) {
    throw new Exception("Division by zero is not allowed.");
  }

  $result = $numerator / $denominator;
  echo "Result: " . $result;
} catch (Exception $e) {
  echo "An error occurred: " . $e->getMessage();
}

echo "<hr>";

// task 8
function divideNumbers($numerator, $denominator)
{
  if ($denominator === 0) {
    throw new Exception("Division by zero is not allowed.");
  }

  return $numerator / $denominator;
}

echo "<b>Task 8:</b><br>";

try {
  $result = divideNumbers(200, 0);
  echo "Result: " . $result;
} catch (Exception $e) {
  echo "An error occurred: " . $e->getMessage();
}

echo "<hr>";