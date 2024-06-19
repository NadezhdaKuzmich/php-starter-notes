<?php

// task 1
echo "<b>Task 1:</b><br>";
// Цей код виведе назву операційної системи, на якій виконується PHP:
echo PHP_OS . "<br>";
// php_uname - повертає опис операційної системи, на якій запущено PHP:
echo php_uname() . "<br>";

if (strtoupper(substr(PHP_OS, 0, 3)) === 'WIN') {
  echo 'This is a server using Windows!';
} else {
  echo 'This is a server not using Windows!' . "<br>";
}
echo "<hr>";

// task 2
echo "<b>Task 2:</b><br>";
$a = 15;
$b = 276;

echo "Before swapping:  " . $a . ', ' . $b . "<br>";
// list - використовується для того, щоб присвоїти списку змінних 
// значення за одну операцію:
list($a, $b) = [$b, $a];

echo "After swapping:  " . $a . ', ' . $b . "<hr>";

// task 3
function removeDuplicates($list1)
{
  // array_values - повертає індексний масив з усіма значеннями масиву.
  // array_unique - повертає новий масив без повторюваних значень:
  $nums_unique = array_values(array_unique($list1));
  return $nums_unique;
}

echo "<b>Task 3:</b><br><pre>";
$nums = [1, 1, 2, 2, 3, 4, 5, 5];
print_r(removeDuplicates($nums));
echo "</pre><hr>";

// task 4
function isContainsStr($str1, $str2)
{
  $str1Len = strlen($str1);
  $str2Len = strlen($str2);
  $start = $str1Len - $str2Len;

  if (substr($str1, $start, $str1Len) == $str2) {
    return "true";
  } else {
    return "false";
  }
}

echo "<b>Task 4:</b><br>";
echo isContainsStr("Python", "on") . "<br>";
echo isContainsStr("JavaScript", "php") . "<br>";
echo "<hr>";

// task 5
function validEmail($email)
{
  $result = trim($email);
  // filter_var - використовується для фільтрації змінних за допомогою 
  // різних фільтрів. 
  // FILTER_VALIDATE_EMAIL - це фільтр, який перевіряє, чи відповідає 
  // рядок формату дійсної адреси електронної пошти:
  if (filter_var($result, FILTER_VALIDATE_EMAIL)) {
    return "true";
  } else {
    echo "false";
  }
}

echo "<b>Task 5:</b><br>";
echo validEmail("abc@example.com") . "<br>";
echo validEmail("abc#example.com") . "<hr>";

// task 6
$myfile = fopen("data/some-text.txt", "w") or die("Unable to open file!");
$txt = "PHP Exercises\n";
fwrite($myfile, $txt);
$txt = "from\n";
fwrite($myfile, $txt);
$txt = "Internet\n";
fwrite($myfile, $txt);
fclose($myfile);

echo "<b>Task 6:</b><br>";
echo "Size of the file: " . filesize("data/some-text.txt") . "<hr>";

// task 7
function withoutMod($m, $n)
{
  $divides = (int) ($m / $n);
  return $m - $n * $divides;
}

echo "<b>Task 7:</b><br>";
echo withoutMod(13, 2) . "<br>";
echo withoutMod(27, 9) . "<br>";
echo withoutMod(19, 4) . "<br>";
echo withoutMod(81, 3) . "<br>";
echo "<hr>";

// task 8
echo "<b>Task 8:</b><br>" . "<pre>";
for ($i = 1; $i < 7; $i++) {
  for ($j = 1; $j < 7; $j++) {
    if ($j == 1) {
      // str_pad($string, $length, $pad_string = " ", $pad_type = STR_PAD_RIGHT) 
      // - повертає рядок, доповнений зліва, справа або з обох боків до заданої довжини:
      echo str_pad($i * $j, 2, " ", STR_PAD_LEFT);
    } else {
      echo str_pad($i * $j, 4, " ", STR_PAD_LEFT);
    }
  }
  echo "<br>";
}
echo "<hr>" . "</pre>";

// task 9
function findNonRepeat($word)
{
  for ($i = 0; $i <= strlen($word); $i++) {
    // substr_count - повертає число входжень підрядка:
    if (substr_count($word, substr($word, $i, 1)) == 1) {
      return substr($word, $i, 1);
    }
  }
}

echo "<b>Task 9:</b><br>";
echo findNonRepeat("Green") . "<br>";
echo findNonRepeat("abcdea") . "<hr>";

// task 10
function multiplyTwoLists($str1, $str2)
{
  $arr1 = explode(' ', trim($str1));
  $arr2 = explode(' ', trim($str2));
  $output = [];

  foreach ($arr1 as $key => $value) {
    $output[$key] = $arr1[$key] * $arr2[$key];
  }

  return implode(' ', $output);
}

echo "<b>Task 10:</b><br>";
echo multiplyTwoLists("10 12 3", "1 3 3") . "<br>";
echo multiplyTwoLists("4 8 5", "2 3 9") . "<hr>";

// task 11
function findPairs($nums, $pairSum)
{
  $pairsOfNums = "";
  echo $pairSum . " - the sum of pairs of numbers: <br>";

  for ($i = 0; $i < count($nums); $i++) {
    for ($j = $i + 1; $j < count($nums); $j++) {
      if ($nums[$i] + $nums[$j] == (int) $pairSum) {
        $pairsOfNums .= $nums[$i] . ", " . $nums[$j] . "; <br>";
      }
    }
  }

  return $pairsOfNums;
}

$nums = [0, 1, 2, 3, 4, 5, 6];
echo "<b>Task 11:</b><br>";
echo findPairs($nums, 7) . "<br>";
echo findPairs($nums, 5) . "<hr>";

// task 12
function sumOfDigits($nums)
{
  $sum = 0;

  for ($i = 0; $i < strlen($nums); $i++) {
    $sum += $nums[$i];
  }

  return $sum;
}

echo "<b>Task 12:</b><br>";
echo sumOfDigits("12345") . "<br>";
echo sumOfDigits("9999");