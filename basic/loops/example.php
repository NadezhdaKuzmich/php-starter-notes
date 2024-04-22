<?php

// example 1
$deposit = 1000;
$interest = 0.05;

for ($years = 1; $years <= 5; $years++) {
  $deposit += ($deposit * $interest);
  echo "The total amount after $years year is: " . number_format($deposit, 2, '.', ' ') . '<br>';
}
echo "<hr>";

// example 2
$names = ['John', 'Michael', 'David'];

foreach ($names as $name) {
  echo "My name is $name. <br>";
}
echo "<hr>";

// example 3
$person = [
  'Name' => 'Nadiia',
  'Age' => 27,
  'Gender' => 'Female'
];

foreach ($person as $key => $value) {
  echo "<b>$key:</b> $value <br>";
}