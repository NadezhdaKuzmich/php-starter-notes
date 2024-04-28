<?php

/*
$_SESSION
Асоціативний масив, що містить змінні сесії, 
які доступні для поточного скрипта.

- Good to use for sensitive information.
- Session exists as long as the browser is open.
*/

// Ініціалізувати сесію
session_start();

// Storing information
$_SESSION['Name'] = "Nadiia";
$_SESSION['Age'] = 27;

echo 'Hello, ' . $_SESSION['Name'] . '<br>';

// Unset усі змінні сесії
session_unset();

// Зруйнувати сесію
session_destroy();

// echo 'Hello, ' . $_SESSION['Name']; // Warning: Undefined array key "Name" 