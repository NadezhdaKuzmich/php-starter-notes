<?php

$xmlData = "<?xml version='1.0' encoding='UTF-8'?>
<note>
<to>Tove</to>
<from> Jani</from>
<heading>Reminder</heading>
<body>Don't forget me this weekend!</body>
</note>
";

$parsed = simplexml_load_string($xmlData);

if (!$parsed) {
  echo 'Failed to parse XML! <br/>';

  foreach (libxml_get_errors() as $error) {
    echo "$error->message <br/>";
  }
} else {
  echo '<pre>';
  print_r($parsed);

  echo '<br/>';
  echo $parsed->body;
  echo '</pre>';
}