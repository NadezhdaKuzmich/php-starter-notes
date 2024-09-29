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

// $query = $connection->prepare("INSERT INTO Users (name, type) VALUES ('Vadym', 'superuser'), ('Superman', 'user')");

$query = $connection->prepare("SELECT Users.id, Users.name, Cars.car_name FROM Users LEFT JOIN Cars ON Users.id=Cars.user_id");

$query->execute();

$result = $query->setFetchMode(PDO::FETCH_ASSOC);

foreach (new RecursiveArrayIterator($query->fetchAll()) as $key => $value) {
  // echo $value["id"] . ' : ' . $value["name"] . ' - ' . $value["type"] . '<br>';
  echo $value["id"] . ' : ' . $value["name"] . ' - ' . ($value["car_name"] ? $value["car_name"] : 'has no car') . '<br>';
}

$connection = null;