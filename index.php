<?php

//house keeping
ini_set('magic_quotes_gpc', "0");
error_reporting(E_ALL);
ini_set('display_errors', "1");



include "app/Windmill.php";

$config = array("siteroot" => "",
	"db" => array(
		"username" => "root",
		"password" => "",
		"server" => "127.0.0.1",
		"database" => "d60593311"
	)
);


$ww = new Windmill($config);
$ww->handleRequests();


