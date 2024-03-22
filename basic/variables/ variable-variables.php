<?php

/*
Using PHP, we can access data through dynamic variable names. 
The name of a variable can be stored in another variable, 
allowing it to be accessed dynamically. Such variables are 
known as variable variables.

To turn a variable into a variable variable, you put an extra 
$ sign in front of your variable.
*/

$foo = "bar"; // foo has value "bar"
$$foo = "data"; // bar has value "data"
echo "\$foo:\t";
echo $foo; // prints bar
echo "<hr>";

echo "\${\$foo}:\t";
echo ${$foo}; // prints data
echo "<hr>";

echo "\$\$foo:\t";
echo $$foo; // prints data
echo "<hr>";

echo "\$bar:\t";
echo $bar; // prints data
echo "<hr>";

$kangaroo = "Kanga";
$$kangaroo = "Roo";
echo "Hi, I'm " . $kangaroo . " and this is " . $Kanga . ".";
echo "<hr>";

$fooBar = 'Bar';
$varPrefix = 'foo';

echo "\$fooBar:\t\t\t\t";
echo $fooBar;
echo "<hr>";

// Using {} is only mandatory when the name of the variable 
// is itself an expression, like this:
echo "\${\$varPrefix . 'Bar'}:\t\t";
echo ${$varPrefix . 'Bar'};
echo "<hr>";

echo "\${\$varPrefix . \$fooBar}:\t\t";
echo ${$varPrefix . $fooBar};
echo "<hr>";