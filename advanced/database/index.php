<?php

$serverName = "localhost";
$username = "root@localhost";
$password = "";

try {
  $connection = new PDO("msql:host=$serverName;dbname=epic_database", $username, $password);
  $connection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

  echo 'Connected successfully!';
} catch (PDOException $error) {
  echo "Connection failed: " . $error;
}
