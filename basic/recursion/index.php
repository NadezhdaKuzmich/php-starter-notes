<?php

/*
Рекурсивна функція - функція яка у своєму тілі викликає себе.
*/

function factorial($number)
{
  if ($number < 2) {
    return $number;
  } else {
    return($number * factorial($number - 1));
  }
}

echo factorial(6);