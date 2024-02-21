<?php
require_once 'helpers/ns_loader.php';

use data\Test1;
use data\Test2;

$data = new Test1();
$data2 = new Test2();

var_dump([
  $data->getData(),
  $data2->getData()
]);