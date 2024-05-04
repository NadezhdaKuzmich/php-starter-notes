<?php

// task 1
// script to get the PHP version and configuration information:
// phpinfo();
/*
Note: phpinfo outputs a large amount of information about the 
current state of PHP. This includes information about PHP 
compilation options and extensions, the PHP version, server 
information and environment, the PHP environment, OS version 
information, paths, master and local values of configuration 
options, HTTP headers, and the PHP License.
*/

// task 2
$colors = ['white', 'green', 'red', 'blue', 'black'];
echo "The memory of that scene for me is like a frame of film 
forever frozen at that moment:<br> the $colors[2] carpet,
the $colors[1] lawn, the $colors[0] house, the leaden sky.
The new president and his first lady.<br> - Richard M. Nixon<hr>";

// task 3
$colors = ['white', 'green', 'red'];

foreach ($colors as $color) {
  echo "$color, ";
}

sort($colors);

echo "<ul>";
foreach ($colors as $color) {
  echo "<li>$color</li>";
}
echo "</ul><hr>";

// task 4
$ceu = [
  "Italy" => "Rome",
  "Luxembourg" => "Luxembourg",
  "Belgium" => "Brussels",
  "Denmark" => "Copenhagen",
  "Finland" => "Helsinki",
  "France" => "Paris",
  "Slovakia" => "Bratislava",
  "Slovenia" => "Ljubljana",
  "Germany" => "Berlin",
  "Greece" => "Athens",
  "Ireland" => "Dublin",
  "Netherlands" => "Amsterdam",
  "Portugal" => "Lisbon",
  "Spain" => "Madrid",
  "Sweden" => "Stockholm",
  "United Kingdom" => "London",
  "Cyprus" => "Nicosia",
  "Lithuania" => "Vilnius",
  "Czech Republic" => "Prague",
  "Estonia" => "Tallin",
  "Hungary" => "Budapest",
  "Latvia" => "Riga",
  "Malta" => "Valetta",
  "Austria" => "Vienna",
  "Poland" => "Warsaw"
];

// sort the associative array by values in ascending order:
asort($ceu);

foreach ($ceu as $country => $capital) {
  echo "The capital of $country is $capital" . "<br>";
}
echo "<hr>";