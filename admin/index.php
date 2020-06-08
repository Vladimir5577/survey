<?php 
session_start();

$error = "";

if(isset($_SESSION["error"])){
	$error = $_SESSION["error"];
	unset($_SESSION["error"]);
}

$password = "";

if(isset($_SESSION["password_field"])){
	$password = $_SESSION["password_field"];
	unset($_SESSION["password_field"]);
}

?>
<!DOCTYPE html>
<html>
	<head>
		<title>Survey</title>
		<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
	</head>

	<body>
		<nav class="navbar navbar-expand-lg navbar-dark bg-primary" >
		  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo01" aria-controls="navbarTogglerDemo01" aria-expanded="false" aria-label="Toggle navigation">
		    <span class="navbar-toggler-icon"></span>
		  </button>
		  <div class="collapse navbar-collapse" id="navbarTogglerDemo01">
		    <a class="navbar-brand" href="#">Home</a>
		    <ul class="navbar-nav mr-auto mt-2 mt-lg-0">
		      <li class="nav-item active">
		        

		      </li>
		      
		    </ul>
		    
		  </div>
		</nav>
		<div class="container">
			<div class="row justify-content-center align-items-center mt-5">
				<div class="col-4">
					<div class="card" style="width: 18rem;">
					  <div class="card-body">
					    <h5 class="card-title">Login</h5>
						<form method="post" action="actions/login_page.php" >
						  <div class="form-group">
						    <label for="passwd">Password</label>
						    <input class=" form-control <?php if($error !== ""){ echo "is-invalid"; } ?> " id="passwd" type="text" name="password" 
						    		value="<?php echo $password; ?>"
						    >
						    <div id="emailHelp" class="invalid-feedback"><?php echo $error; ?></div>
						  </div>
				      		
				      		<button style="color: black;" class="btn btn-outline-success my-2 my-sm-0" type="submit">Submit</button>
				    	</form>	
					  </div>
					</div>
				</div>
			</div>
		</div>

	</body>
</html>		