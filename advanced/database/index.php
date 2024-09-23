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

$query = $connection->prepare("SELECT id, name FROM Users");
$query->execute();

$result = $query->setFetchMode(PDO::FETCH_ASSOC);

foreach (new RecursiveArrayIterator($query->fetchAll()) as $key => $value) {
  echo $value["name"] . "<br>";
}

$connection = null;