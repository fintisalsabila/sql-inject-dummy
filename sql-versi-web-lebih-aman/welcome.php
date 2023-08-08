<?php
    include("db/config.php");
    session_start();

    if (isset($_POST['username']) and isset($_POST['password'])) {
        $username = $_POST['username'];
        $password = $_POST['password'];

        // Prepare the query using prepared statements
        $stmt = $db->prepare("SELECT id FROM users WHERE password = ? AND username = ?");
        $stmt->bind_param("ss", $password, $username);
        $stmt->execute();

        // Get the result set
        $result = $stmt->get_result();
        if (!$result) {
            $error = $db->error;
        } else {
            $count = $result->num_rows;

            // If result matched $username and $password, $count must be 1
            if ($count == 1) {
                $_SESSION['current_user'] = $username;
                header("location: welcome.php");
                exit(); // Add this line to stop executing the rest of the code
            } else {
                $error = "Username atau password tidak valid!";
            }
        }

        $stmt->close();
    }

    // Add this line to define the $result variable
    $result = null;
?>

<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title>KELOMPOK 11 KSI</title>
		<link rel="shortcut icon" href="/favicon.ico" type="image/x-icon">
		<link rel="stylesheet" type="text/css" href="../style/css/style.css">
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
			<h1>Selamat datang !</h1>
			<a href="logout.php"><button type="button" class="btn btn-primary">Log Out</button></a>
			<h3 style="color: white;">Mau cari apa?</h3> 
			<form method="post" action="" class="form-search">
				<div class="row">
					<div class="col-xs-12 col-sm-6 col-md-4">
						<div class="input-group">
							<input type="text" class="form-control" name="search" id="searchInput" placeholder="City" autofocus>
							<span class="input-group-btn">
								<input type="submit" name="submit" value="Search" class="btn btn-primary">
							</span>
						</div>
					</div>
				</div>
			</form>
			<div class="well col-xs-12 col-sm-6" style="margin-top: 20px;">
				<div class="table-responsive">
					<table class="table table-striped">
						<thead>
							<tr>
								<th>Kota</th>
								<th>Alamat</th>
								<th>No_hape</th>
							</tr>
						</thead>
						<tbody>
						<?php if ($result && $result->num_rows > 0) {
							while($row = $result->fetch_assoc()) {
								echo "<tr><td>".htmlspecialchars($row["kota"])."</td><td>".htmlspecialchars($row["alamat"])."</td><td>".htmlspecialchars($row["no_hape"])."</td></tr>";
							}
						}
						?>
						</tbody>
					</table>
				</div>
			</div>
		</div>
	</body>
</html>
