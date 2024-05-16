<?php

// task 1
echo "<pre>";
echo "<b>Task 1:</b><br><br>";
for ($row = 0; $row <= 7; $row++) {
  for ($column = 0; $column <= 7; $column++) {
    if (
      (($column == 1 or $column == 5) and $row != 0) or
      (($row == 0 or $row == 3) and
        ($column > 1 and $column < 5))
    ) {
      echo "*";
    } else {
      echo " ";
    }
  }
  echo "<br>";
}
echo "<hr>";

// task 2
echo "<b>Task 2:</b><br><br>";
for ($row = 0; $row < 7; $row++) {
  for ($column = 0; $column <= 7; $column++) {
    if (
      $column == 1 or
      (($row == 0 or $row == 3 or $row == 6) and ($column < 5 and $column > 1))
      or ($column == 5 and ($row != 0 and $row != 3 and $row != 6))
    ) {
      echo "*";
    } else {
      echo " ";
    }
  }
  echo "<br>";
}
echo "<hr>";

// task 3
echo "<b>Task 3:</b><br><br>";
for ($row = 0; $row < 7; $row++) {
  for ($column = 0; $column <= 7; $column++) {
    if (
      ($column == 1 and ($row != 0 and $row != 6)) or
      (($row == 0 or $row == 6) and ($column > 1 and $column < 5)) or (
        $column == 5 and ($row == 1 or $row == 5))
    ) {
      echo "*";
    } else {
      echo " ";
    }
  }
  echo "<br>";
}
echo "<hr>";

// task 4
echo "<b>Task 4:</b><br><br>";
for ($row = 0; $row < 7; $row++) {
  for ($column = 0; $column <= 7; $column++) {
    if (
      $column == 1 or
      (($row == 0 or $row == 6) and ($column > 1 and $column < 5)) or
      ($column == 5 and $row != 0 and $row != 6)
    ) {
      echo "*";
    } else {
      echo " ";
    }
  }
  echo "<br>";
}
echo "<hr>";

// task 5
echo "<b>Task 5:</b><br><br>";
for ($row = 0; $row < 7; $row++) {
  for ($column = 0; $column <= 7; $column++) {
    if (
      $column == 1 or
      (($row == 0 or $row == 6) and ($column > 1 and $column < 6)) or
      ($row == 3 and $column > 1 and $column < 5)
    ) {
      echo "*";
    } else {
      echo " ";
    }
  }
  echo "<br>";
}
echo "<hr>";

// task 6
echo "<b>Task 6:</b><br><br>";
for ($row = 0; $row < 7; $row++) {
  for ($column = 0; $column <= 7; $column++) {
    if (
      $column == 1 or
      ($row == 0 and $column > 1 and $column < 6) or
      ($row == 3 and $column > 1 and $column < 5)
    ) {
      echo "*";
    } else {
      echo " ";
    }
  }
  echo "<br>";
}
echo "<hr>";

// task 7
echo "<b>Task 7:</b><br><br>";
echo '<table border ="1" style="border-collapse: collapse">';

for ($row = 1; $row <= 10; $row++) {
  echo "<tr>";

  for ($column = 1; $column <= 10; $column++) {
    $p = $column * $row;
    echo "<td width=\"30px\">$p</td>";
  }

  echo "</tr>";
}

echo "</table>";
echo "<br><hr>";

// task 8
function findFactorial($num)
{
  if ($num == 0) {
    return 1;
  } else {
    return $num * findFactorial($num - 1);
  }
}

echo "<b>Task 8:</b><br><br>";
echo findFactorial(4) . "<br>";
echo findFactorial(6) . "<br>";
echo "<hr>";

// task 9
function isPrime($num)
{
  $result = 1;

  for ($i = 2; $i < $num; $i++) {
    if ($num % $i == 0) {
      $result = 0;
    }
  }

  return $num . ($result ? " is a Prime Number." : " isn't a Prime Number.") . "<br>";
}

echo "<b>Task 9:</b><br><br>";
echo isPrime(3);
echo isPrime(6);
echo "<hr>";

// task 10
// v1
function reverseStr($str)
{
  $length = strlen($str);

  if ($length == 1) {
    return $str;
  } else {
    $length--;
    return reverseStr(substr($str, 1, $length)) . substr($str, 0, 1);
  }
}

echo "<b>Task 10:</b><br><br>";
echo "<b>v1:</b><br>";
echo reverseStr('1234') . "<br>";
echo reverseStr('hello') . "<br>";

// v2
echo "<br><b>v2:</b><br>";
echo strrev('1234') . "<br>";
echo strrev('hello');
echo "<hr>";

echo "</pre>";