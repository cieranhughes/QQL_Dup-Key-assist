<!DOCTYPE html>
<html lang="en">

<?php
$page_title = 'Edit';

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
					<h1 class="display-3">Edit Existing Services</h1>
					<hr />
				</div>
			</div>

			<!-- Success Message -->

			<!-- Table -->
			<div class="row">
				<div class="col">
					<table class="table table-striped">
						<thead>
							<tr>
								<th scope="col">ID</th>
								<th scope="col">Service</th>
								<th scope="col">Action</th>
								<th scope="col">Delete</th>
							</tr>
						</thead>
						<tbody>

							<?php
							
							$sql = "SELECT service_id, name FROM `Services`";
							$stmt = mysqli_stmt_init($dbconnect);
							mysqli_stmt_prepare($stmt, $sql);
							mysqli_stmt_execute($stmt);
							$results = mysqli_stmt_get_result($stmt);
							while ($r = mysqli_fetch_array($results)) {
								$msgString = "'are you sure you want to delete?'";
								echo '<tr><th scope="row">' . $r['service_id'] . '</th><td>' . $r['name'] . '</td><td><a class="btn btn-warning" href="./edit-service.php?id=' . $r['service_id'] . '" role="button">Edit</a></td><td><a class="btn btn-danger" href="./delete-handler.php?id=' . $r['service_id'] . '" onClick="return confirm(' . $msgString . ');">Delete</a></td></tr>';
							}
							mysqli_stmt_close($stmt);
							?>

						</tbody>
					</table>
				</div>
			</div>
		</div>
	</main>

	<?php
	//Footer
	include('../assets/components/footer.php');
	?>
</body>

</html>