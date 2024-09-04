<?php

// task 1
echo "<b>Task 1:</b><br>";
$replace1 = substr_replace("Hello JavaScript", "PHP", 6);
echo "$replace1 <br>";

$replace2 = substr_replace("Hello JavaScript", "PHP", -10);
echo "$replace2 <hr>";

// task 2
echo "<b>Task 2:</b><br>";
$replace = substr_replace("PHP!", "Hello ", 0, 0);
echo "$replace1 <hr>";

// task 3
echo "<b>Task 3:</b><br>";
echo strcoll("Hello php", "hello") . " because the first string is less than the second string.<br>";
echo strcoll("hello", "Hello") . " because the first string is greater than the second string.<hr>";

// task 4
echo "<b>Task 4:</b><br>";
echo strip_tags("Hello <b>world!</b>");
echo "<hr>";

// task 5
$str = "Hello PHP";

echo "<b>Task 5:</b><br>";
echo "Your string is: $str <br>";
echo "By using str_pad function: " . str_pad($str, 20, ".");
echo "<hr>";

// task 6
$arr = ["PhP", "Python", "Java"];

echo "<b>Task 6:</b><br>";
echo "Your array string is: ['PhP', 'Python', 'Java']<br>";
echo '<pre>';
print_r(str_ireplace("Java", "JavaScript", $arr, $count));
echo "</pre>Replacements: $count<hr>";

// task 7
$str = "Good Morning!";
$searchStr = "Morning! Good";

echo "<b>Task 7:</b><br>";
$matchChar = strspn($str, $searchStr);
echo "Number of characters matched: $matchChar<hr>";

// task 8
echo "<b>Task 8:</b><br>";
echo "Before using 'str_repeat' function:('?,10)<br>";
echo "After using 'str_repeat()' function:" . str_repeat('?', 10);
echo "<hr>";

// task 9
echo "<b>Task 9:</b><br>";
parse_str("name=Nadiia", $output);
echo "My Name: $output[name] <hr>";

// task 10
$str = "Hello PHP";
echo "<b>Task 10:</b><br>";
echo strrev($str) . "<hr>";