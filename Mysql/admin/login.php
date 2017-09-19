<?php

	if (isset($_POST['submit'])){

		session_start();


		if(isset($_POST['username']) && isset($_POST['password'])){
	# yra ivesti prisijungimo duomenys
			if($_POST['username'] == "Edvinas" && $_POST['password'] == "slaptas") {
		#vartotojo vardas ir slaptazodis tinka
				$_SESSION['user']['username'] = $_POST['username'];
				$_SESSION['user']['level'] = 'admin';
				header('Location: index.php');
			} else {
				$error = "Wrong username or password";
				echo $error;
			} 
		}		
	}
?>

<!DOCTYPE html>
<html>
<head>
	<title>Login</title>
</head>
<body>
	<form method="POST">
		<div class="form-group">
		<label for="username">Username</label>
		<input name="username" type="text" class="form-control" id="Username">
		</div>
		<div class="form-group">
		<label for="exampleInputPassword1">Password</label>
		<input name="password" type="password" class="form-control" id="Password">
		</div>
		<button name="submit" type="submit" class="btn btn-primary">Login</button>
	</form>

</body>
</html>