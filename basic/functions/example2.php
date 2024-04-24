<?php

$num = 10;

function addByValue($x)
{
  $x += 5;
}

function addByReference(&$x)
{
  $x += 10;
}

addByValue($num);
echo 'The value of $num is: ' . $num . '<br>';
addByReference($num);
echo 'The value of $num is: ' . $num . '<br>';