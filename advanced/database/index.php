<?php

$serverName = "localhost";
$username = "root";
$password = "root";

try {
  $connection = new PDO("mysql:host=$serverName;dbname=epic", $username, $password);
  $connection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

  echo 'Connected successfully!';
} catch (PDOException $error) {
  echo "Connection failed: $error";
}
