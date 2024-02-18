<?php

/*
Анонімний клас - можливість у PHP працювати не з реальним класом, а з
потрібним вам прототипом.
*/

// анонімні класи
class Events
{
  private $logger;

  public function setLog($logger)
  {
    $this->logger = $logger;
  }

  public function log()
  {
    $this->logger->log();
  }

}

$a = new class {
  public function log()
  {
    echo "Log was done at" . date('Y-m-d H:I:s') . "<br/>";
  }

};

$event = new Events();
$event->setLog(new class {
  public function log()
  {
    echo "Log was done at" . date('Y-m-d H:I:s') . "<br/>";
  }

});

$event->log();
sleep(2);
$event->log();