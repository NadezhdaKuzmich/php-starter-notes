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