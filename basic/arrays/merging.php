<?php

/*
Indexed Array:
 - array_merge is the easiest way to merge two or more arrays. 
It can take as much input parameters as you give to it and 
returns the merged array. The later value will not overwrite 
the original value but will be appended, like an indexed array. 
Values in the input array with indexes will be renumbered with 
incrementing keys starting from zero in the result array.

Associative Arrays:
 - array_merge() merges the elements of one or more arrays 
together (irrespective of the data type inside the arrays) so 
that the values of one are appended to the end of the previous 
one, and returns the resulting array. If the input arrays have 
the same string keys, then the later value for that key will 
overwrite the previous one.
*/

// array_merge
$a1 = ["red", "green"];
$a2 = ["blue", "yellow"];
$a3 = ["black"];
echo "<pre>";
print_r(array_merge($a1, $a2, $a3));
echo "<hr>";

$a1 = ["a" => "red", "b" => "green"];
$a2 = ["c" => "blue", "b" => "yellow"];
$a3 = ["e" => 3];
print_r(array_merge($a1, $a2, $a3));
echo "</pre>";