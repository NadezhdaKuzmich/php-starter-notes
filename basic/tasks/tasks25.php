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

// task 2
echo "<b>Task 2:</b><br>";
if (isset($_SESSION["preferences"])) {
  $userPreferences = $_SESSION["preferences"];

  echo "User Preferences:</br>";
  foreach ($userPreferences as $key => $value) {
    echo "$key: $value </br>";
  }
} else {
  echo "No user preferences found.";
}
echo "<hr>";