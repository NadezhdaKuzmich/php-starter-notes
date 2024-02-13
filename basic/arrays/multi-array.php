<?php

/*
Багатомірний масив - це масив, який як значення зберігає в собі інші масиви.
*/

echo "<pre>";

$movies = [
  "comedy" => [
    "Pink Panther",
    "John English",
    "See no evil hear no evil"
  ],
  "action" => [
    "Die Hard",
    "Expendables"
  ],
  "premiere" => [
    "action" => [
      "The Lord of the rings"
    ],
    "romance" => [
      "Romeo and Juliet"
    ],
  ]
];


print_r($movies);
print_r($movies["comedy"]);

print_r($movies["premiere"]["romance"]);
// best way:
$premiere = $movies['premiere'];
print_r($premiere['romance']);

print_r($movies["comedy"][0]);

echo "</pre>";