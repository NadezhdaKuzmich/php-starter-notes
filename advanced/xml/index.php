<?php

// parse from string
$xmlData = "<?xml version='1.0' encoding='UTF-8'?>
<note>
<to>Kate</to>
<from>John</from>
<heading>Reminder</heading>
<body>Learn PHP!</body>
</note>
";

$parsedFromStr = simplexml_load_string($xmlData);

// parse from file
$parsedFromFile = simplexml_load_file('./data/test.xml');

if (!$parsedFromStr) {
  echo 'Failed to parse XML! <br/>';

  foreach (libxml_get_errors() as $error) {
    echo "$error->message <br/>";
  }
} else {
  echo 'Parse from string: <pre>';
  print_r($parsedFromStr);

  echo '<br/>';
  echo $parsedFromStr->body;
  echo '</pre>';

  echo '<br/>' . str_repeat('*', 40) . '<br/><br/>';

  echo 'Parse from file: <pre>';
  print_r($parsedFromFile);

  echo '<br/>';
  // echo $parsedFromFile->note->body . '<br/>';
  // echo $parsedFromFile->note->body->anothernote . '<br/><br/>';

  // echo $parsedFromFile->note[1]->body;

  foreach ($parsedFromFile->children() as $note) {
    echo "<b>" . $note["overview"] . "</b><br/>";
    echo "$note->to <br/>";
    echo "$note->from <br/>";
    echo "$note->heading <br/>";
    echo "$note->body <br/>";

    echo $note->body->anothernote ? $note->body->anothernote . '<br/><br/>' : '<br/>';
  }

  echo '</pre>';

  echo str_repeat('*', 40) . '<br/><br/>';
}