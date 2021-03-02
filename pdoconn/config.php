<?php
//session_start();
define('conString', 'mysql:host=localhost;dbname=knusbows_gmt');
define('dbUser', 'knusbows_gmt');
define('dbPass', 'gmt$2019');

 

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

$user = new User();
$user->dbConnect(conString, dbUser, dbPass);

 

 