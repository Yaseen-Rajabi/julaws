<?php

	$dbHost = 'eu-cdbr-west-03.cleardb.net';
	$dbUser = 'b27beb21fb1d11';
	$dbPass = 'dcd38a91';
	$dbName = 'ju_laws_portal';

$dbConn = mysqli_connect($dbHost, $dbUser, $dbPass, $dbName) or die ('MySQL connect failed. ' . mysqli_error());
mysqli_select_db($dbConn,$dbName) or die('Cannot select database. ' . mysqli_error());

mysqli_set_charset($dbConn,'utf8'); 

date_default_timezone_set('Asia/Amman');


?>






 
							
				