<?php

// task 1
$bday = new DateTime('05.07.1996');
$today = new Datetime(date('m.d.y'));
$diff = $today->diff($bday);

echo "<b>Task 1:</b><br>";
printf('Your age : %d years, %d month, %d days', $diff->y, $diff->m, $diff->d);
echo "<hr>";

// task 2
function getWeeksBetween($date1, $date2)
{
  // DateTime::createFromFormat -  pозбирає рядок із датою 
  // відповідно до зазначеного формату:
  $first = DateTime::createFromFormat('m/d/Y', $date1);
  $second = DateTime::createFromFormat('m/d/Y', $date2);

  if ($date1 > $date2) {
    return getWeeksBetween($date2, $date1);
  }

  return floor($first->diff($second)->days / 7);
}

$dt1 = '1/1/2024';
$dt2 = '12/31/2024';

echo "<b>Task 2:</b><br>";
echo 'Weeks between ' . $dt1 . ' and ' . $dt2 . ' is ' . getWeeksBetween($dt1, $dt2);
echo "<hr>";