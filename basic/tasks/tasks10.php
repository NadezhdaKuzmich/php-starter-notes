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

echo "</pre>";