<?php

/*
echo - statement is mainly used for debugging. The first use of echo is to 
output simple strings, also numbers and html. If we wanted to write on the 
webpage, we are better off using HTML tags to do so. The HTML will be added 
after the PHP code so don’t forget the exit tag. 

print - similar to echo. It will print the string onto the page.

Use var_dump to get more info, like length and data type.
*/

$name = 'Nadiia';

// echo
echo "1. My name is $name<br>";         // replaced by the variable value
// echo 'My name is $name.';            // print as it is '$name'
echo '2. My name is ' . $name . '<br>';
echo '3. My name is ', $name, '<hr>';

// print
print "1. My name is $name<br>";
print '2. My name is ' . $name . '<br>';
// print 'My name is ', $name, '<br>';  // error: can only accept one string