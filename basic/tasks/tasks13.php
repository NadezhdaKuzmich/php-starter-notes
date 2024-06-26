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

// task 7
$dt = strtotime("2024-12-21");

echo "<b>Task 7:</b><br>";
echo date("Y-m-d", strtotime("+1 month", $dt)) . "<hr>";

// task 8
$month_num = 9;
$dateObj = DateTime::createFromFormat('!m', $month_num);
$month_name = $dateObj->format('F');

echo "<b>Task 8:</b><br>";
echo $month_name . "<hr>";

// task 9
echo "<b>Task 9:</b><br>";
// t - кількість днів у місяці:
echo 'Number of days for the month of ' . date('M') . ' is: ' . date('t');
echo "<hr>";

// task 10
echo "<b>Task 10:</b><br>";
ini_set('date.timezone', 'America/New_York');
echo  date('g:i A') . ' - time in New York <br>';

ini_set('date.timezone', 'Europe/Warsaw');
echo  date('g:i A') . ' - time in Krakow <hr>';

// task 11
echo "<b>Task 11:</b><br>";
echo strtoupper("the quick brown fox jumps over the lazy dog.") . '<br>';
echo strtolower("THE QUICK BROWN FOX JUMPS OVER THE LAZY DOG") . '<br>';

// ucfirst - перетворює перший символ рядка у верхній регістр:
echo ucfirst("the quick brown fox jumps over the lazy dog.") . '<br>';
// ucwords - перетворює перший символ кожного слова в рядку у верхній регістр:
echo ucwords("the quick brown fox jumps over the lazy dog.") . '<hr>';

// task 12
$str1 = '082307';

echo "<b>Task 12:</b><br>";
// chunk_split - використовується для розбиття рядка на фрагмент:
echo substr(chunk_split($str1, 2, ':'), 0, -1);