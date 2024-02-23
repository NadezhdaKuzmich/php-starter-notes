<?php

$heap = new SplMinHeap();
$heap->insert(123);
$heap->insert(44);
$heap->insert(54);
$heap->insert(711);
$heap->insert(29);

echo '<pre>';
var_dump([
  $heap->extract(),
  $heap->extract(),
  $heap->extract(),
]);
echo '</pre>';