<?php

// example 1
function checkAge($age)
{
  if ($age < 18) {
    return 'Sorry, you are too young!';
  } elseif ($age <= 21) {
    return 'You can get a job.';
  } else {
    return 'You can buy alcohol.';
  }
}

echo checkAge(17) . '<br>';
echo checkAge(20) . '<br>';
echo checkAge(24) . '<hr>';

// example 2
function goToParty($age)
{
  if ($age < 10) {
    return 'You need to be in bed!';
  } elseif ($age < 18) {
    return 'Sorry, you are too young!';
  } elseif ($age > 18 && $age < 21) {
    return 'You aren\'t allowed to drink!!';
  } elseif ($age > 50) {
    return 'You are too old to party!';
  } else {
    return 'You are old enough to go out!';
  }
}

echo goToParty(9) . '<br>';
echo goToParty(16) . '<br>';
echo goToParty(19) . '<br>';
echo goToParty(24) . '<br>';
echo goToParty(51) . '<br>';