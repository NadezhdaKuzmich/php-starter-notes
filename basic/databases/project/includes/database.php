<?php

// Params to connect to a database:
$dbHost = "localhost";
$dbUser = "root";
$dbPass = "root";
$dbName = "phptutorial";

// Connection to a database:
// mysqli_connect повертає результат - ресурс з'єднання.
$conn = mysqli_connect($dbHost, $dbUser, $dbPass, $dbName);

if (!$conn) {
  die('Database connection failed!');
}