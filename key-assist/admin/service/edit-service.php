<?php

//See if logged in or redirect
session_start();
if (!isset($_SESSION['loggedin'])) {
	header('Location: /admin/index.html');
	exit();
}
?>
<!DOCTYPE html>
<html lang="en">

<?php
$page_title = 'Add';

//Connection File
include('../assets/config/db_connect.php');

//Head
include('../assets/components/head.php');

?>

<body>
	<?php
	//Header
	include('../assets/components/header.php');
	?>

	<main>
		<div class="container">
			<!-- Title -->
			<div class="row">
				<div class="col">
					<h1 class="display-3">Add a Service</h1>
					<hr />
				</div>
			</div>

			<!-- Form -->
			<form action="./update-handler.php?id=<?php echo $_GET['id']; ?>" method="POST">
				<!-- General -->
				<div class="row">
					<div class="col">
						<h1 class="display-6">General Infomation</h1>
					</div>
				</div>
				<?php
				$sql = "SELECT * FROM Services WHERE service_id=?";
				$stmt = mysqli_stmt_init($dbconnect);
				mysqli_stmt_prepare($stmt, $sql);
				mysqli_stmt_bind_param($stmt, "s", $_GET['id']);
				mysqli_stmt_execute($stmt);
				$results = mysqli_stmt_get_result($stmt);
				while ($r = mysqli_fetch_array($results)) {
				?>
					<div class="mt-3 mb-3 row">
						<label for="name" class="col-sm-2 col-form-label">Service Name:</label>
						<div class="col-sm-10 col-md-6 col-lg-4">
							<input type="text" class="form-control" id="name" value="<?php echo $r['name'] ?>" name="name">
						</div>
					</div>
					<div class="mb-3 row">
						<label for="longname" class="col-sm-2 col-form-label">Service Longname:</label>
						<div class="col-sm-10 col-md-6 col-lg-4">
							<input type="text" class="form-control" id="longname" value="<?php echo $r['longname'] ?>" name="longname">
						</div>
					</div>
					<div class="mb-3 row">
						<label for="tagline" class="col-sm-2 col-form-label">Service Tagline:</label>
						<div class="col-sm-10 col-md-6 col-lg-4">
							<input type="text" class="form-control" id="tagline" value="<?php echo $r['tagline'] ?>" name="tagline">
						</div>
					</div>
					<div class="mb-3 row">
						<label for="description" class="col-sm-2 col-form-label">Service Description:</label>
						<div class="col-sm-10 col-md-6 col-lg-4">
							<textarea class="form-control" id="description" value="Description" rows="5" name="description"><?php echo $r['description'] ?></textarea>
						</div>
					</div>
				<?php
				}
				mysqli_stmt_close($stmt);
				?>
				<div class="mb-3 row">
					<label for="answer-3" class="col-sm-2 col-form-label"></label>
					<div class=" mt-3 form-group d-grid gap-2 col-sm-6 col-md-8 col-lg-4">
						<input class="btn btn-warning" name="submit" type="submit" value="Update">
					</div>
				</div>

			</form>
		</div>
	</main>

	<?php
	//Footer
	include('../assets/components/footer.php');
	?>
</body>

</html>