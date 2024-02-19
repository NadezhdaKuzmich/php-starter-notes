<?php

// типовий приклад роботи toString
// __toString => викликається, коли ми намагаємося працювати з об'єктом, як із рядком

// припустимо, у нас є завдання, і є його статус
// після виконаної роботи статус змінюється, і ми хочемо дізнатися, який саме статус зараз
class Work
{
  const STATUS_NEXT_TO_WORK = 'next to work';
  const STATUS_JOB_STARTED = 'work started';
  const STATUS_JOB_ACTIVE = 'in active stage';
  const STATUS_JOB_ALMOST_DONE = 'almost done';
  const STATUS_JOB_DONE = 'done';

  public $status;

  public function __construct()
  {
    $this->status = self::STATUS_NEXT_TO_WORK;
  }

  public function startWork()
  {
    $this->status = self::STATUS_JOB_STARTED;
  }

  public function continueWork()
  {
    $this->status = self::STATUS_JOB_ACTIVE;
  }

  public function continueWork2()
  {
    $this->status = self::STATUS_JOB_ALMOST_DONE;
  }

  public function finishWork()
  {
    $this->status = self::STATUS_JOB_DONE;
  }

  public function __toString()
  {
    return $this->status;
  }
}

$work = new Work();
$work->startWork();
$work->continueWork();
$work->continueWork2();

var_dump(
  (string) $work
);

echo '<br>' . $work;