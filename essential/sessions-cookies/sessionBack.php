<?php
echo $_COOKIE['userName'] . '<br />';;
session_start();
echo $_SESSION['userName'];