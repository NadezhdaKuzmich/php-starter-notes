<?php
/*
Арифметичні та строкові операції
Для роботи з рядками є всього два оператори:
• Конкатенація ('.')
• Привласнення з конкатенацією ('.=')
*/

// Конкатенація
$name = 'John';
$secondName = 'Doe';

echo '1. His name is ' . $name . ' ' . $secondName . '<hr>';

// Привласнення з конкатенацією 
$hello = '2. Hello ';
$hello .= 'world!';

echo $hello . '<hr>';

$full_name = "Nadiia";
$full_name .= " Kuzmich";
echo $full_name;