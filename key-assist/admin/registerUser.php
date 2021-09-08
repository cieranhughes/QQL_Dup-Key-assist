<?php

//Set Varables
$pword=password_hash($_POST['password'], PASSWORD_DEFAULT);

//Connection File
include('assets/config/db_connect.php');

//Add Account Detials
$sql = "INSERT INTO Login_Details(username, password) VALUES(?,?);";
$stmt=mysqli_stmt_init($dbconnect);
mysqli_stmt_prepare($stmt,$sql);
mysqli_stmt_bind_param($stmt, "ss", $_POST['username'], $pword);
mysqli_stmt_execute($stmt);
mysqli_stmt_close($stmt);
mysqli_close($dbconnect);
?>

<html>
	<head>
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
		<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
		<link rel="stylesheet" href="assets/css/style-login.css">
		<script src="https://kit.fontawesome.com/963cb298bc.js" crossorigin="anonymous"></script>
		<title>Register</title>
	</head>
	<body>	
		<main class="container">
			<div class="row justify-content-center">
				<div class="col-sm-10 col-md-7 col-lg-5">
					<div class="card shadow">
						<div class="card-header">
							<h1>Register</h1>
						</div>
						<div class="card-body">
							<div class="row">
								<div class="col-12">
									<p>You account has sucessfully been added.</p>
									<p>Go back to the <a href="index.html">Login Page</a> and login. </p>
									<p><?php echo $_POST['username'] . $pword; ?></p>
								</div>
							</div>
						</div>
					</div>
				</div>
            </div>
		</main>
	</body>
</html>