<?php

/*
Асоціативні масиви - це масив з рядками в якості індексу і 
зберігає значення елементів в поєднанні з ключовими значеннями.
*/

echo "<pre>";

// Значення ключа string | int
$arr = [
  1 => "a", // 1
  "5" => "b", // 5
  // 2.5 => "c", // 2  BUT => Deprecated:  Implicit conversion
  true => "d", // true -> 1, false -> 0
  null => "e"  // ""
];
print_r($arr);

$boys = [
  "Peter" => 35,
  "Ben" => 37,
  "Joe" => 43
];
$boys['John'] = 26;
$boys[] = 0;
$boys[] = 1;
$boys[] = 2;

print_r($boys);
print_r($boys['Joe']);

echo "</pre>";