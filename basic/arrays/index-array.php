<?php

/*
Індексні масиви
Масив PHP - це впорядкований набір даних, який встановлює 
відповідність між значенням і ключем.
Індексний масив – це масив з числовим індексом. Значення 
зберігаються та доступні лінійно – одне за одним.

The simplest form of an array is indexed by an integer, and 
ordered by the index, with the first element lying at index 0.
*/

// empty array
$arr = array(); // array(0) { }
$arr = []; // array(0) { }

$arr = [1, 2, 3]; // array(3) { [0]=> int(1) [1]=> int(2) [2]=> int(3) }

$arr = [
  'one',
  5 => 2,
  3
];
// array(3) { [0]=> string(3) "one" [5]=> int(2) [6]=> int(3) }

$arr[] = 'four';
$arr[5] = 'five';

echo "<pre>";
var_dump($arr);
echo "<br>";
var_dump($arr[5]);
// var_dump($arr[2]); // Warning: Undefined array key 2 
echo "<br>";

$arr = array("1", "2", "3", "4");
$arr[] = '5';
print_r($arr);
echo "</pre>";

// Trying to output an array with an echo will simply print 
// the data type instead and warning:
// echo $arr; // Warning: Array to string conversion...

function findMaxVal($arr)
{
  $max = $arr[0];

  foreach ($arr as $num) {
    if ($max < $num) {
      $max = $num;
    }
  }

  return $max;
}

echo findMaxVal([2, 6, 3, 12, 9, 11]);