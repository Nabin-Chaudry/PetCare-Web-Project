<?php
require 'config.php';
if(!empty($_SESSION["id"])){
  header("Location: index.php");
}
if(isset($_POST["submit"])){
  $fname = $_POST["fname"];
  $email = $_POST["email"];
  $pwd = $_POST["pwd"];
  $cpwd = $_POST["cpwd"];
  $duplicate = mysqli_query($conn, "SELECT * FROM clncpet WHERE email = '$email'");
  if(mysqli_num_rows($duplicate) > 0){
    echo
    "<script> alert('ERROR Email Already Registered.'); </script>";
  }
  else{
    if($pwd == $cpwd){
      $query = "INSERT INTO clncpet VALUES('','$fname','$email','$pwd')";
      mysqli_query($conn, $query);
      echo
      "<script> alert('Registration Successful for Pet Care.'); </script>";
    }
    else{
      echo
      "<script> alert('Password Does Not Match'); </script>";
    }
  }
}
?>

<!DOCTYPE html>
<html>
<head>
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
	<link href="assets/style.css" rel="stylesheet">
	<title>Vet Care Project</title>
	<link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
	<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
</head>
<body>
	<div class="container infinity-container">
		<div class="row">
			<div class="col-md-1 infinity-left-space"></div>

			<!-- FORM BEGIN -->
			<div class="col-lg-10 col-md-10 col-sm-12 col-xs-12 text-center infinity-form">
				<!-- Company Logo -->
				<div class="text-center mb-3 mt-5">
					<img src="./assets/pawLogo-min.png" width="150px">
				</div>
				<div class="text-center mb-4">
					<h4>Create an account</h4>
				</div>
				<!-- Form -->
				<form class="px-3" action="" method="post">
					<!-- Input Box -->
					<div class="form-input">
						<span><i class="fa fa-user"></i></span>
						<input type="text" name="fname" placeholder="Full Name" tabindex="10"required>
					</div>
					<div class="form-input">
						<span><i class="fa fa-envelope"></i></span>
						<input type="email" name="email" placeholder="Email Address" tabindex="10"required>
					</div>
					<div class="form-input">
						<span><i class="fa fa-lock"></i></span>
						<input type="password" name="pwd" placeholder="Password" required>
						<input type="password" name="cpwd" placeholder="Conform Password" required>
					</div>
					<!-- Register Button -->
		            <div class="mb-3"> 
						<button type="submit" name="submit" class="btn btn-block">Register</button>
					</div>
					
					<div class="text-center mb-5" style="color: #777;">Already have an account? 
						<a class="login-link" href="login.php">Login here</a>
			       	</div>
				</form>
			</div>
			<!-- FORM END -->

			<div class="col-md-1 infinity-right-space"></div>
		</div>
	</div>

</body>
</html>
