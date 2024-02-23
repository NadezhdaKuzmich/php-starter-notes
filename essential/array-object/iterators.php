<?php

/*
Ітератор - паттерн PHP, який дає змогу точніше працювати з об'єктом.
Більш точно* перебирати дані.
*/

class MyIterator implements Iterator
{
  private array $data;

  public function __construct(array $data)
  {
    $this->data = $data;
  }

  #[\ReturnTypeWillChange]
  public function current()
  {
    return current($this->data);
  }

  #[\ReturnTypeWillChange]
  public function next()
  {
    next($this->data);
  }

  #[\ReturnTypeWillChange]
  public function key()
  {
    key($this->data);
  }

  public function valid(): bool
  {
    return boolval(key($this->data)) != false;
  }

  public function rewind(): void
  {
    reset($this->data);
  }
}

$data = [1 => 'first', 2 => 'second', 3 => 'third'];
$it = new MyIterator($data);
echo $it->current();
echo "<hr>";

$it->next();
echo $it->current();
echo "<hr>";

foreach ($it as $value) {
  var_dump($value);
  echo "<hr>";
}