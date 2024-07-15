<?php

// task 1
session_start();
$userPreferences = [
  "theme" => "light",
  "language" => "Spanish",
  "notifications" => true
];
$_SESSION["preferences"] = $userPreferences;

echo "<b>Task 1:</b><br>";
echo "User preferences have been stored in the session variable 'preferences'.<hr>";