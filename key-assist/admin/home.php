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
$page_title = 'Home';

//Head
include('./assets/components/head.php');
?>

<body>
	<?php
	//Header
	include('./assets/components/header.php');
	?>

	<main>
		<div class="container">
			<!-- Title -->
			<div class="row">
				<div class="col">
					<h1 class="display-3">Content Managment System</h1>
					<hr />
				</div>
			</div>

			<!-- Text -->
			<div class="row">
				<div class="col">
					<p>This admin section of the website is designed to allow you to change the content on the main website. The sections include:</p>
					<ul>
						<li>Adding a service offered by key assist</li>
						<li>Editing a services information, allowing it to stay up to date</li>
						<li>Deleting a service that key assist offer</li>
					</ul>
				</div>
			</div>
		</div>
	</main>

	<?php
	//Footer
	include('./assets/components/footer.php');
	?>
</body>

</html>