<?php

session_start();

//Connection File
include('./db_connect.php');

//Setting Varables
$error="Username or password is incorect!";
$errorRedirect="You will be redirected to the login page.";

//Getting Login Details
$sql="SELECT * FROM Login_Details WHERE username=?";
$stmt=mysqli_stmt_init($dbconnect);
mysqli_stmt_prepare($stmt,$sql);
mysqli_stmt_bind_param($stmt, "s", $_POST['username']);
mysqli_stmt_execute($stmt);
$results = mysqli_stmt_get_result($stmt);
$numRows = mysqli_num_rows($results);
while ($r=mysqli_fetch_array($results)) {
	$userID = $r['userID'];
	$username = $r['username'];
	$password = $r['password'];
}
mysqli_stmt_close($stmt);

//Function if details incorrect
function IncorrectDetails() {
	header('Refresh: 5; URL=../../index.html');
}

//See if account exists
if($numRows>0) {
	//Account exists now varify password
	if($_POST['username'] == $username && password_verify($_POST['password'], $password)) {
		$_SESSION['loggedin'] = TRUE;
		$_SESSION['userID'] = $userID;
		header('Location: ../../home.php');
	} else {
		IncorrectDetails();
	}
} else {
	IncorrectDetails();
}
mysqli_close($dbconnect); 
?>

<html>
	<head>
		<meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <title>-Login-</title>
		<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
		<link href="../../assets/css/style-login.css" rel="stylesheet">
	</head>
	<body>
		<main class="container">
			<div class="row justify-content-center">
				<div class="col-sm-12 col-md-6 col-lg-6">
					<div class="card shadow">
						<div class="card-header">
							<h1>Error</h1>
						</div>
						<div class="card-body">
							<div class="row">
								<div class="col-12">
									<p><?php echo $error . "<br><br>" . $errorRedirect; ?></p>
									<br>
									<p>Or click <a href="../../index.html">here</a></p>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</main>

		<!-- JS Scripts -->
		<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
		<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
		<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
	</body>
</html>