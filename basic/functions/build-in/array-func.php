<?php

// Array functions
$personalInfo = [
  'Name' => 'Nadiia',
  'Surname' => 'Kuzmich',
  'Age' => 27
];

$moreInfo = [
  'Job' => 'Developer',
  'City' => 'Krakow'
];

// Count elements in array
echo count($personalInfo) . '<br>';
echo count($moreInfo) . '<hr>';

// Array merge
$personalInfo = array_merge($personalInfo, $moreInfo);
echo '<pre>';

// var_dump
var_dump($personalInfo);
echo '<hr>';

// print_r
print_r($personalInfo);
echo '<hr>';

// foreach
foreach ($personalInfo as $key => $value) {
  echo "$key: $value <br>";
}
echo '<hr>';

// Print only keys
print_r(array_keys($personalInfo));
echo '<hr>';

// Print only values
print_r(array_values($personalInfo));
echo '<hr>';

// Add value in array
$cars = ['Volkswagen', 'Audi', 'Mercedes'];
array_push($cars, 'Volvo');
print_r($cars);
echo '<hr>';

// Search inside of an array
echo array_search('Volkswagen', $cars) . '<br>';
echo array_search('Volvo', $cars) . '<br>';
echo '</pre>';