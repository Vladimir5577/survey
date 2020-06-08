<?php 
require_once("../config/constants.php");
	$dbServername = DB_HOST;
	$dbUsername = DB_USER;
	$dbPassword = DB_PASS;
	$dbName = DB_NAME;
	$conn = mysqli_connect($dbServername, $dbUsername, $dbPassword, $dbName);
	if (!$conn) {
		echo "Connection Failed. Something Wrong!";
	}
?>