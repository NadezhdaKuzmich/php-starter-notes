<?php

function findAllPalindromes($str)
{
  $palindromes = [];

  for ($i = 0; $i < strlen($str); $i++) {
    for ($j = 2; $j <= (strlen($str) - $i); $j++) {
      $word = substr($str, $i, $j);
      $reverse_word = strrev($word);
      if ($word == $reverse_word) {
        array_push($palindromes, $word);
      }
    }
  }

  return count($palindromes);
}

echo findAllPalindromes('aabbbaa') . '<br>';
echo findAllPalindromes('ABCDDCBA') . '<br>';
echo findAllPalindromes('xyzxyzxyzzyxzyx');