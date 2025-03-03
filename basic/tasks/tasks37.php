<?php

// task 1
$names = ['Nadiia', 'Vadym', 'Tetiana'];

echo "<b>Task 1:</b><br><pre>";
var_dump(implode(", ", $names));
echo "</pre><hr>";

// task 2
$numbers = [1, 2, 3, 4];
$even = array_filter($numbers, fn($val) => $val % 2 === 0);

echo "<b>Task 2:</b><br><pre>";
var_dump($even);
echo "</pre><hr>";

// task 3
class Dog
{
  public $name;
  public $age;
  public $color;
}

$dog = new Dog();
$dog->name = 'Szarik';
$dog->age = 1;
$dog->color = 'black';

echo "<b>Task 3:</b><br><pre>";
var_dump($dog);
echo "</pre><hr>";

// task 4
$list = ['b', 'c'];
array_unshift($list, 'a');
echo "<b>Task 4:</b><br><pre>";
var_dump($list);
echo "</pre><hr>";

// task 5
$name = 'Nadiia';

echo "<b>Task 5:</b><br>";
echo substr($name, 2, 2);
echo "<hr>";

// task 6
$str = 'hello world!';

echo "<b>Task 6:</b><br>";
$str = ucfirst($str);
echo "<hr>";

// task 7
echo "<b>Task 7:</b><br>";
$letter = "B";
echo str_increment($letter);
echo "<hr>";

// task 8
echo "<b>Task 8:</b><br>";
print "
   Multi-line
   string can be output  
   by echo as well as 
   print statement in PHP
   ";
echo "<hr>";

// task 9
$nums = ["ONe" => 1, "two" => 2, "ThRee" => 3 ];

echo "<b>Task 9:</b><br><pre>";
var_dump(array_change_key_case($nums, CASE_UPPER));
echo "</pre><hr>";