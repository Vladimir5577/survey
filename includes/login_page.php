<?php 
	session_start();

	if (!isset($_POST['password'])) {
		//$_SESSION["error"] = "Password field required";
		header("location: ../index.php");
		exit;
	}

	if ($_POST['password'] != "secretgizem") {
	 	header("location: ../index.php");
		exit;
	}else {
		header("location: main_admin.php");
		exit;
	}


 ?>

