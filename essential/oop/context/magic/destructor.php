<?php

// Деструктор – магічний метод __destruct, що викликається при знищенні екземпляра класу.

class User
{
  public function __destruct()
  {
    echo "User left the system";
  }
}

$user = new User();

class User2
{
  public function __construct()
  {
    echo "User log in application <br>";
  }

  public function __destruct()
  {
    echo "User left application <br>";
  }

  public function doSmth()
  {
    echo "User doing some things <br>";
  }
}

$user2 = new User2();
$user2->doSmth();