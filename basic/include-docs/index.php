<?php
/*
- include :
if the path is wrong - we only get a warning.

- require :
if the path is wrong - the script will stop.
*/
include 'includes/head.php';
require 'includes/header.php';
?>

<h1><?php introduction() ?></h1>

<?php
include 'includes/footer.php';
?>