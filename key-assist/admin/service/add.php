<!DOCTYPE html>
<html lang="en">

<?php
$page_title = 'Home';

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
			<div class="row">
				<div class="col">
					<h1 class="display-6">General Infomation</h1>
				</div>
			</div>
			<form>
				<div class="mt-3 mb-3 row">
					<label for="name" class="col-sm-2 col-form-label">Service Name:</label>
					<div class="col-sm-10 col-md-6 col-lg-4">
						<input type="text" class="form-control" id="name" placeholder="Name">
					</div>
				</div>
				<div class="mb-3 row">
					<label for="longname" class="col-sm-2 col-form-label">Service Longname:</label>
					<div class="col-sm-10 col-md-6 col-lg-4">
						<input type="text" class="form-control" id="longname" placeholder="Longname">
					</div>
				</div>
				<div class="mb-3 row">
					<label for="tagline" class="col-sm-2 col-form-label">Service Tagline:</label>
					<div class="col-sm-10 col-md-6 col-lg-4">
						<input type="text" class="form-control" id="tagline" placeholder="Tagline">
					</div>
				</div>
				<div class="mb-3 row">
					<label for="description" class="col-sm-2 col-form-label">Service Description:</label>
					<div class="col-sm-10 col-md-6 col-lg-4">
						<textarea class="form-control" id="description" placeholder="Description" rows="3"></textarea>
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