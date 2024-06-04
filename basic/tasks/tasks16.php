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

// task 9
echo "<b>Task 9:</b><br>";
try {
  $file = "test.txt";

  // file_exists - перевіряє, чи існує вказаний файл або каталог:
  if (!file_exists($file)) {
    throw new RuntimeException("File does not exist.");
  }

  $handle = fopen($file, "r");
  if (!$handle) {
    throw new Exception("Error opening file.");
  }

  fclose($handle);
} catch (RuntimeException $e) {
  echo "RuntimeException: " . $e->getMessage();
} catch (Exception $e) {
  echo "Exception: " . $e->getMessage();
} finally {
  echo "<br> Script execution completed.";
}
echo "<hr>";

// task 10
function validateString($inputString)
{
  // empty - перевіряє чи порожня змінна:
  if (empty($inputString)) {
    throw new Exception("String should not be empty!");
  }
}

echo "<b>Task 10:</b><br>";
try {
  $string = "";
  validateString($string);
  echo "Valid string: " . $string;
} catch (Exception $e) {
  echo "An error occurred: " . $e->getMessage();
}
echo "<hr>";

// task 11
echo "<b>Task 11:</b><br>";
try {
  $number = "abc";

  // is_numeric - перевіряє, чи є змінна числом або рядком, що містить число:
  if (!is_numeric($number)) {
    throw new InvalidArgumentException("Invalid number.");
  }

  $result = 100 / $number;
  echo "Result: " . $result;
} catch (InvalidArgumentException $e) {
  echo "InvalidArgumentException: " . $e->getMessage();
} catch (DivisionByZeroError $e) {
  echo "DivisionByZeroError: " . $e->getMessage();
} catch (Throwable $e) {
  echo "An error occurred: " . $e->getMessage();
}
echo "<hr>";

// task 12
echo "<b>Task 12:</b><br>";
try {
  $number = 0;

  if ($number === 0) {
    throw new Exception("Number cannot be zero.");
  }

  $result = 200 / $number;
  echo "Result: " . $result;
} catch (Exception $e) {
  echo "An error occurred: " . $e->getMessage();
} finally {
  echo "This will always be executed.";
}