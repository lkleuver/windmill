<?php

//house keeping
ini_set('magic_quotes_gpc', "0");
error_reporting(E_ALL);
ini_set('display_errors', "1");



include "app/Windmill.php";

$config = array();


$ww = new Windmill($config);
$ww->handleRequests();


