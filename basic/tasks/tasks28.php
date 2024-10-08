<?php

// task 1
function getDayOfTheWeek($day)
{
  switch ($day) {
    case "0":
      return "It is Sunday!";
    case "1":
      return "It is Monday!";
    case "2":
      return "It is Tuesday!";
    case "3":
      return "It is Wednesday!";
    case "4":
      return "It is Thursday!";
    case "5":
      return "It is Friday!";
    case "6":
      return "It is Saturday!";
    default:
      return "Invalid number!";
  }
}

echo "<b>Task 1:</b><br>";
$today = getdate();
echo getDayOfTheWeek($today['wday']);
echo "<hr>";

// task 2
$colors = ["a" => "green", "red", "b" => "green", "blue", "red"];
$result = array_unique($colors);

echo "<b>Task 2:</b><br><pre>";
print_r($colors);
echo "<br>";
print_r($result);
echo "</pre><hr>";

// task 3
$cars = ["Swift", "Honda City", "Elentra"];

echo "<b>Task 3:</b><br><pre>";
print_r($cars);
echo "<br>";

sort($cars);
print_r($cars);
echo "<br>";

rsort($cars);
print_r($cars);
echo "</pre><hr>";

// task 4
$ages = ["John" => "25", "Smith" => "43", "Joe" => "37"];

echo "<b>Task 4:</b><br><pre>";
print_r($ages);
echo "<br>";

asort($ages);
print_r($ages);
echo "<br>";

ksort($ages);
print_r($ages);
echo "<br>";

arsort($ages);
print_r($ages);
echo "<br>";

krsort($ages);
print_r($ages);
echo "<br>";

print_r(array_change_key_case($ages, CASE_UPPER));
echo "<br>";

natcasesort($ages);
print_r($ages);
echo "</pre><hr>";

// task 5
$x = true and false;

echo "<b>Task 5:</b><br>";
var_dump($x); // true
echo "<hr>";

// task 6
$x = 5;

echo "<b>Task 6:</b><br>";
echo $x;
echo "<br>";
echo $x++ + $x++;
echo "<br>";
echo $x;
echo "<br>";
echo $x-- - $x--;
echo "<br>";
echo $x;
echo "<hr>";

// task 7
$arr = [
  '0' => 'z1',
  '1' => 'Z10',
  '2' => 'z12',
  '3' => 'Z2',
  '4' => 'z3'
];

echo "<b>Task 7:</b><br><pre>";
asort($arr, SORT_STRING | SORT_FLAG_CASE | SORT_NATURAL);
print_r($arr);
echo "</pre><hr>";

// task 8
$str1 = 'yabadabadoo';
$str2 = 'yaba';

echo "<b>Task 8:</b><br>";
if (strpos($str1, $str2) !== false) {
  echo "'$str1' contains '$str2'";
} else {
  echo "'$str1' does not contain '$str2'";
}
echo "<hr>";

// task 9
$alpha = range('A', 'Z');

echo "<b>Task 9:</b><br>";
for ($i = 0; $i < 5; $i++) {
  for ($j = 5; $j > $i; $j--) {
    echo $alpha[$i];
  }
  echo "<br>";
}
echo "<hr>";

// task 10
$num = 1;

echo "<b>Task 10:</b><br>";
for ($i = 0; $i < 4; $i++) {
  for ($j = 0; $j <= $i; $j++) {
    echo "$num ";
    $num++;
  }
  echo "<br>";
}
echo "<hr>";

// task 11
$x = "abc";
$$x = 200;

echo "<b>Task 11:</b><br>";
echo "$x <br>";
echo $$x . "<br>";
echo "$abc <hr>";

// task 12
$name = "Cat";
${$name} = "Dog";
${${$name} } = "Monkey";

echo "<b>Task 12:</b><br>";
echo "$name <br>";
echo ${$name} . "<br>";
echo "$Cat <br>";
echo ${${$name} } . "<br>";
echo "$Dog <br>";