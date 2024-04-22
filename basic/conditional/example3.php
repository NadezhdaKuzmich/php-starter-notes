<?php

function sayHello($role)
{
  switch ($role) {
    case 'Visitor':
      echo 'Welcome, Visitor!' . '<br>';
      break;
    case 'Admin':
      echo 'Hello, Admin!' . '<br>';
      break;
    case 'User':
      echo 'Hi, User!' . '<br>';
      break;
    default:
      echo "Nice to see you, $role!" . '<br>';
  }
}

sayHello('User');
sayHello('Admin');
sayHello('Visitor');
sayHello('Employee');