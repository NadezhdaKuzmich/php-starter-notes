<?php

// task 1
echo "<b>Task 1:</b><br>";
$str = "Hello";
echo "$str <br>";
echo chunk_split($str, 2, ".") . "<br>";
echo chunk_split($str, 1, "...");
echo "<hr>";

// task 2
$str = "PHP is Lovely Language!";
$strArray = count_chars($str, 1);

echo "<b>Task 2:</b><br>";
foreach ($strArray as $key => $value) {
  echo "The character <b>'" . chr($key) . "'</b> was found $value time(s)<br>";
}
echo "<hr>";

// task 3
$str = "Hello, we are here to help you.";

echo "<b>Task 3:</b><pre>";
print_r(explode(" ", $str, 0));
print_r(explode(" ", $str, 4));
print_r(explode(" ", $str, -3));
echo "</pre><hr>";

// task 4
$arr = ['Welcome', 'to', 'PHP'];

echo "<b>Task 4:</b><br>";
echo implode(" + ", $arr);
echo "<hr>";

// task 5
$arr = ['1', '2', '3', '4', '5', '6', '7', '8', '9', '10'];

echo "<b>Task 5:</b><br>";
echo join('<br>', $arr);
echo "<hr>";

// task 6
echo "<b>Task 6:</b><br>";
echo levenshtein("Hello World", " World");
echo "<hr>";

// task 7
echo "<b>Task 7:</b><br>";
echo similar_text("Hello PHP", "Hello Javatpoint");
echo "<hr>";

// task 8
$str1 = "Hello PHP";
$str2 = "PHP";

echo "<b>Task 8:</b><br>";
echo strchr($str1, $str2);
echo "<hr>";

// task 9
$str = "hello world";
$str = ucfirst($str);

echo "<b>Task 9:</b><br>";
echo "$str <hr>";

// task 10
$str = "Hello world";
$str = lcfirst($str);

echo "<b>Task 10:</b><br>";
echo "$str <hr>";

// task 11
$str = "An example of the wordwrap function to break the string";
$width = 12;
$break = "</br>";

echo "<b>Task 11:</b><br>";
echo wordwrap($str, $width, $break);
echo "<hr>";

// task 12
$string = "Hii everyone!";
$search = 'Hii';
$replace = 'Hello';

echo "<b>Task 12:</b><br>";
echo '<b>String before replacement:</b><br>';
echo "$string <br>";

$newstr = str_replace($search, $replace, $string, $count);
echo '<b>New replaced string is:</b><br>';
echo "$newstr <br>";
echo "Number of replacement: $count";