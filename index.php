<?php
	include("db/config.php");
	session_start();

	if (isset($_POST['username']) and isset($_POST['password'])) {
		$username = $_POST['username'];
		$password = $_POST['password'];
		$query = "SELECT id FROM users WHERE password = '$password' AND username = '$username'";
		$result = $db->query($query);
		if (!$result) {
			$error = $db->error;
		} else {
			$count = $result->num_rows;
			// If result matched $username and $password, $count must be 1
			if ($count == 1) {
				$_SESSION['current_user'] = $username;
				header("location: welcome.php");
			} else {
				$error = "Username atau password tidak valid!";
			}
		}
	}
?>

<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title>KELOMPOK 11 KSI</title>
		<link rel="shortcut icon" href="/favicon.ico" type="image/x-icon">
		<link rel="stylesheet" type="text/css" href="css/style.css">
		<!-- Bootstrap -->
		<link href="css/bootstrap.min.css" rel="stylesheet">
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
		<script src="js/bootstrap.min.js"></script>
		<style>
    body {
      background-image: url("style/img/bg.jpg");
      background-size: cover;
    }
  </style>
	</head>

	<body>
	<?php if (isset($error)) {
		echo '<div class="alert alert-danger alert-dismissible" role="alert"><button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>'.$error.'</div>';
	} ?>

		<div class="container">
			<form action="" method="post" class="form-login">
				<h1><center>KELOMPOK 11 KSI</center></h1>
				<h2><center>Silahkan login</center></h2>
				<label for="inputUsername" class="sr-only">Username</label>
				<input type="text" name="username" id="inputUsername" class="form-control" placeholder="Username" required autofocus><br>
				<label for="inputPassword" class="sr-only">Password</label>
				<input type="password" name="password" id="inputPassword" class="form-control" placeholder="Password" required>
				<button class="btn btn-lg btn-primary btn-block" type="submit">Log in</button>
			</form>
		</div>
	</body>
</html>