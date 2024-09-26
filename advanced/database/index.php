<?php

$serverName = "localhost";
$username = "root";
$password = "root";

try {
  $connection = new PDO("mysql:host=$serverName;dbname=epic", $username, $password);
  $connection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

  echo 'Connected successfully!<br>';
} catch (PDOException $error) {
  echo "Connection failed: $error";
}

$type = 'superuser';

// $query = $connection->prepare("SELECT id, name, type FROM Users");
// $query = $connection->prepare("SELECT * FROM Users");
// $query = $connection->prepare("SELECT * FROM Users WHERE type='superuser'");
// $query = $connection->prepare("SELECT * FROM Users WHERE type='$type'");
// $query = $connection->prepare("SELECT * FROM Users WHERE name LIKE '%n'"); // has to end on the 'n'
// $query = $connection->prepare("SELECT * FROM Users WHERE name LIKE '%n%'"); // contain 'n'
$query = $connection->prepare("SELECT * FROM Users");

$query->execute();

$result = $query->setFetchMode(PDO::FETCH_ASSOC);

foreach (new RecursiveArrayIterator($query->fetchAll()) as $key => $value) {
  echo $value["id"] . ' : ' . $value["name"] . ' - ' . $value["type"] . '<br>';
}

$connection = null;