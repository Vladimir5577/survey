<?php 
	session_start();

	if (!isset($_POST['password'])) {
		
		$_SESSION["error"] = "Password field required";
		header("location: ../index.php");
		exit;
	}

	if ($_POST['password'] != "secretgizem") {
		$_SESSION["error"] = "Invalid credentials";
		$_SESSION["password_field"] = $_POST["password"];
	 	header("location: ../index.php");
		exit;
	}else {
		$_SESSION["login"] = true;
		$_SESSION["mydata"] = "secret data";
		header("location: ../main_admin.php");
		exit;
	}


 ?>

