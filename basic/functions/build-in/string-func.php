<?php

// String functions
$str = 'Today is a sunny day.';

// Strlen
echo strlen('Hello') . '<br>';  // 5
echo strlen($str) . '<hr>';     // 21

// String word count
echo str_word_count($str) . '<br>';                 // 5
echo str_word_count('My name is Nadiia') . '<hr>';  // 4

// Find text within asting
function checkEmail($email)
{
  return strpos($email, '@')
    ? 'This is a valid email'
    : 'This is an invalid email';
}

echo checkEmail('user@gmail.com') . '<br>';
echo checkEmail('hello.gmail.com') . '<hr>';

// Ucwords - every first letter of a word is uppercase
echo ucwords('What is your name?') . '<hr>';

// Whole string to uppercase
echo strtoupper('What is your name?') . '<hr>';

// Whole string to lowercase
echo strtolower('What is your name?') . '<hr>';