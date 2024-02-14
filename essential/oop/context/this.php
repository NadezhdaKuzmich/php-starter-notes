<?php

/*
Контекст виклику $this
• $this – “псевдозмінна”
• $this - посилання на об'єкт, що відображає дані, доступні в "Контексті поточного об'єкта".
• Посилання на об'єкт, що викликається.
*/

class Human
{
  public $name;
  public $surname;
  public $birthYear;

  public function getAge()
  {
    return date('Y') - $this->birthYear;
  }

  public function getFullName()
  {
    return "My full name is {$this->name} {$this->surname}.";
  }

  public function greeting()
  {
    return "Hello! My name is {$this->name}. I'm {$this->getAge()}.";
  }
}

$human = new Human();
$human->name = "Nadiia";
$human->surname = "Kuzmich";
$human->birthYear = 1996;
echo $human->getFullName() . '<br>';
echo $human->greeting() . '<br>';

class ConcertTickets
{
  public $name = 'AC/DC';

  public function getName()
  {
    return $this->name;
  }

  public function get2Tickets($ticket)
  {
    var_dump(
      $this->getName(),
      $ticket->getName()
    );
  }
}

$tickets = new ConcertTickets();
$anotherTickets = new ConcertTickets();
$anotherTickets->name = 'DC/AC';

$tickets->get2Tickets($anotherTickets);