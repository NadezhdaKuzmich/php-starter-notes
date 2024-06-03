<?php

/*
Using an external file for application configuration is preferred to 
hard-coding values within the application. PHP provides a built-in 
function for reading key-value pair from external configuration files 
(parse_ini_file(<filename>) and for reading and parsing XML files 
(simplexml_load_file(<filename>)).
*/

try {
  // ini
  $config = parse_ini_file('data/appconfig.ini', 1);
  $DEBUG = $config['debug']['debug_on'];

  echo '<pre>';
  echo "The value of the debug configuration setting in the ini file is: $DEBUG.<hr>";
  print_r($config);
  echo '<hr>';

  unset($config, $DEBUG);

  // xml
  $config = simplexml_load_file('data/appconfig.xml');
  $DEBUG = $config->debug->debug_on;
  $root = $config->directory->root;

  echo "The value of the debug configuration setting in the xml file is: $DEBUG.<br>";
  echo "The value of the root configuration setting in the xml file is: $root<hr>";
  print_r($config);
  echo '</pre>';

} catch (Exception $ex) {
  echo "Error: " . $ex->getMessage();
}