<?php

/*
Date
'd' = Day
'j' = Day without zeros
'D' = Day of week (3 letters)
'l' = Full day of the week
'm' = Month as a number with zeros
'n' = Month as a number without zeros
'M' = Month (3 letters)
'F' = Full month
'y' = Two-digit year
'Y' = Full year

Times
'g' = Hours in 12-hour format without zeros
'h' = Hours in 12 hour format with zeros
'G' = hours in 24-hour format without zeros
'H' = Hours in 24-hour format with zeros
'a' = am/pm in lowercase
'A' = am/pm in uppercase
'i' = minutes without leading zeros
's' = seconds without leading zeros
*/

// DATE
echo date('d') . '<br>';
echo date('D') . '<br>';
echo date('l') . '<br>';
echo date('n') . '<br>';
echo date('m') . '<br>';
echo date('M') . '<br>';
echo date('F') . '<br>';
echo date('y') . '<br>';
echo date('Y') . '<hr>';

echo date('l, d F') . '<hr>';
echo date('d/m/Y') . '<hr>';
