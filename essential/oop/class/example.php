<?php
class Student
{
  private $name;
  private $mark1;
  private $mark2;

  public function __construct($na, $ma1, $ma2)
  {
    $this->name = $na;
    $this->mark1 = $ma1;
    $this->mark2 = $ma2;
  }

  public function getMarks($marknumber)
  {
    if ($marknumber == 1) {
      return $this->mark1;
    } else {
      return $this->mark2;
    }
  }

  public function calcAverage()
  {
    return ($this->mark1 + $this->mark2) / 2;
  }
}

$student = new Student('John', 12, 8);
echo 'Mark #1:________' . $student->getMarks(1) . '<br>';
echo 'Mark #2:________' . $student->getMarks(2) . '<br>';
echo 'Average:________' . $student->calcAverage() . '<br>';