<?php

/*
Концепція -
- провідний задум.
- ключова ідея чого-небудь.
- певний спосіб розуміння, трактування будь-яких явищ.

Концепції ООП:
1. Інкапсуляція 
2. Спадкування 
3. Поліморфізм 
4. Абстракція
*/

class CarCompany
{
  public $name = 'Some car';
  public $createdDate = '21.11.2004';
}

// extends
class Opel extends CarCompany
{
  public $name = 'Opel';
}

class OpelSupersport extends Opel
{
  public $name = 'Opel SuperSport';
}

$company1 = new CarCompany();

$company2 = new Opel();
$company3 = new OpelSupersport();

var_dump([
  $company1->name,
  $company2->name,
  $company3->name,
]);