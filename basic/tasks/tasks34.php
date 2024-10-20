<?php

// task 1
$names = ["Nadiia", "Vadym", "Tatiana"];
$ages = ["28", "32", "53"];
$users = array_combine($names, $ages);

echo "<b>Task 1:</b><br><pre>";
print_r($users);
echo "</pre><hr>";