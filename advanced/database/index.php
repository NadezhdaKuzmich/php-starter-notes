<?php

$serverName = "localhost";
$username = "root";
$password = "root";

// CONNECTION
try {
  $connection = new PDO("mysql:host=$serverName;dbname=epic", $username, $password);
  $connection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

  echo 'Connected successfully!<br>';
} catch (PDOException $error) {
  echo "Connection failed: $error";
}

$type = 'superuser';

// SELECT (WHERE, WHERE-LIKE)
// $query = $connection->prepare("SELECT id, name, type FROM Users");
// $query = $connection->prepare("SELECT * FROM Users");
// $query = $connection->prepare("SELECT * FROM Users WHERE type='superuser'");
// $query = $connection->prepare("SELECT * FROM Users WHERE type='$type'");
// $query = $connection->prepare("SELECT * FROM Users WHERE name LIKE '%n'"); // has to end on the 'n'
// $query = $connection->prepare("SELECT * FROM Users WHERE name LIKE '%n%'"); // contain 'n'

// INSERT
// $query = $connection->prepare("INSERT INTO Users (name, type) VALUES ('Vadym', 'superuser'), ('Superman', 'user')");
// $lastID = $connection->lastInsertId();
// echo "Last id: $lastID <hr />";

// MULTIPLE INSERT
// $connection->beginTransaction();
// $connection->exec("INSERT INTO Users (name, type) VALUES ('Venom', 'superuser')");
// $connection->exec("INSERT INTO Users (name, type) VALUES ('Igor', 'user')");
// $connection->commit();

$query = $connection->prepare("UPDATE Users SET name='Superuser' WHERE id=3");
$query->execute();

// LEFT JOIN
// $query = $connection->prepare("SELECT Users.id, Users.name, Cars.car_name FROM Users LEFT JOIN Cars ON Users.id=Cars.user_id");
// $query->execute();

// DELETE WHERE
// $query = $connection->prepare("DELETE FROM Users WHERE id=8");
// $query->execute();

// TRUNCATE TABLE
// $query = $connection->prepare("TRUNCATE TABLE Cars");
// $query->execute();

// DROP TABLE
// $query = $connection->prepare(query: "DROP TABLE Cars");
// $query->execute();

// $query = $connection->prepare("SELECT * FROM Users");
// $query = $connection->prepare("SELECT * FROM Users LIMIT 2");
$query = $connection->prepare("SELECT * FROM Users WHERE id<=3");
$query->execute();

// $result = $query->setFetchMode(PDO::FETCH_ASSOC);

foreach (new RecursiveArrayIterator($query->fetchAll()) as $key => $value) {
  echo $value["id"] . ' : ' . $value["name"] . ' - ' . $value["type"] . '<br>';
  // echo $value["id"] . ' : ' . $value["name"] . ' - ' . ($value["car_name"] ? $value["car_name"] : 'has no car') . '<br>';
}

// CREATE TABLE
// $query = $connection->prepare("
// CREATE TABLE Test
// (
// id int,
// name varchar(32),
// age int
// )");

// CREATE TABLE (LIKE)
// $query = $connection->prepare("CREATE TABLE NewUsers LIKE Users");
// $query = $connection->prepare("INSERT INTO NewUsers SELECT * FROM Users");
// $query->execute();

// ALTER COLUMN
// $query = $connection->prepare("
// ALTER TABLE NewUsers 
// ADD country varchar(64)
// ");

// $query = $connection->prepare("
// ALTER TABLE NewUsers 
// DROP COLUMN country
// ");

$query = $connection->prepare("
ALTER TABLE NewUsers 
MODIFY COLUMN name varchar(64)
");
$query->execute();

$connection = null;

/*
try {
  // CREATE DATABASE
  // $connection = new PDO("mysql:host=$serverName;", $username, $password);
  // $connection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

  // $query = $connection->prepare("CREATE DATABASE testDB");
  // $query->execute();

  $connection = new PDO("mysql:host=$serverName;dbname=testDB", $username, $password);
  $connection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

  echo 'Connected successfully!<br>';
} catch (PDOException $error) {
  echo "Connection failed: $error";
}
*/

// $query = $connection->prepare("
// CREATE TABLE Test
// (
// id int,
// name varchar(32),
// age int
// )");
// $query->execute();

// DROP DATABASE
// $query = $connection->prepare("DROP DATABASE testDB");
// $query->execute();

// $connection = null;