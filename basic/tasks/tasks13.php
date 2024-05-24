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

// task 3
echo "<b>Task 3:</b><br>";
echo date('m', strtotime('-1 month')) . '<br>';
echo date('m', strtotime('+1 month'));
echo "<hr>";

// task 4
function convertSec($seconds)
{
  $dt1 = new DateTime("@0");  // starting seconds
  $dt2 = new DateTime("@$seconds");  // ending seconds

  $diff = $dt1->diff($dt2);  // the time difference
  return $diff->format('%a days, %h hours, %i minutes and %s seconds');
}

echo "<b>Task 4:</b><br>";
echo convertSec(200000);
echo "<hr>";

// task 5
$months = [];
for ($i = 1; $i <= 6; $i++) {
  $date = date('Y-m-01', strtotime("-$i months"));
  array_push($months, $date);
}

echo "<b>Task 5:</b><br>";
echo "<pre>";
print_r($months);
echo "</pre><hr>";

// task 6
echo "<b>Task 6:</b><br>";
echo date("M - Y") . "<br>";
echo date("M - Y", strtotime("-1 Month")) . "<br>";
echo date("M - Y", strtotime("-2 Months")) . "<br>";
echo date("M - Y", strtotime("-3 Months"));
echo "<hr>";