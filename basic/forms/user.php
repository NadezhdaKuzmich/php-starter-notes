<?php

/*
GET is used for bookmarking URLs and data that is not 
sensitive and has a two thousand characters limit:
*/

// $username = $_GET['username'];
$username = $_POST['username'];

echo "Nice to meet you, $username!";