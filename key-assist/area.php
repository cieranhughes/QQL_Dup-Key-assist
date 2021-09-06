<!DOCTYPE html>
<html lang="en">

<?php
$page_title = 'Area';

//Services Class
require_once('assets/classes/area_class.php');
$area = new Area($_GET['id']);

//Connection File
include('assets/config/db_connect.php');

//Head
include('assets/components/head.php');
?>

<body>
	<?php
	//Header
	include('assets/components/header.php');
	?>

	<main>
		<div class="container">

			<!-- Title Block -->
			<div class="row">
				<div class="col text-center">
					<h1 class="display-5 fs-4">Call Us Now:</h1>
					<h1 class="display-6 fw-bold text-phone fs-4">03301 072349</h1>
					<p class="text-muted">local rate number</p>
				</div>
			</div>
		</div>

		<!-- Section 1 -->
		<div class="container-fluid background-grey">
			<div class="container">
				<div class="row pt-3">
					<!-- Text -->
					<div class="col-sm-12 col-md-6 pt-3">
						<h1 class="display-5 fs-3 fw-bold"><?php echo $area->name; ?></h1>
						<p class="text-muted"><?php echo $area->description; ?></p>
					</div>
					<!-- Image -->
					<div class="col-sm-12 col-md-6">
						<img class="img-fluid" src="assets/img/car.png" alt="car">
					</div>
				</div>
				<!-- Bullet Points -->
				<div class="row pt-4">
					<div class="row mt-2 mb-3">
						<div class="col-sm-10 col-md-6 col-lg-6">
							<h5>
								<svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="green" class="bi bi-check-square-fill" viewBox="0 0 16 16">
									<path d="M2 0a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2h4zm10.03 4.97a.75.75 0 0 1 .011 1.05l-3.992 4.99a.75.75 0 0 1-1.08.02L4.324 8.384a.75.75 0 1 1 1.06-1.06l2.094 2.093 3.473-4.425a.75.75 0 0 1 1.08-.022z" />
								</svg>
								<?php echo $area->point_1 ?>
							</h5>
						</div>
						<div class="col-sm-10 col-md-6 col-lg-6">
							<h5>
								<svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="green" class="bi bi-check-square-fill" viewBox="0 0 16 16">
									<path d="M2 0a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2h4zm10.03 4.97a.75.75 0 0 1 .011 1.05l-3.992 4.99a.75.75 0 0 1-1.08.02L4.324 8.384a.75.75 0 1 1 1.06-1.06l2.094 2.093 3.473-4.425a.75.75 0 0 1 1.08-.022z" />
								</svg>
								<?php echo $area->point_2 ?>
							</h5>
						</div>
						<div class="col-sm-10 col-md-6 col-lg-6">
							<h5>
								<svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="green" class="bi bi-check-square-fill" viewBox="0 0 16 16">
									<path d="M2 0a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2h4zm10.03 4.97a.75.75 0 0 1 .011 1.05l-3.992 4.99a.75.75 0 0 1-1.08.02L4.324 8.384a.75.75 0 1 1 1.06-1.06l2.094 2.093 3.473-4.425a.75.75 0 0 1 1.08-.022z" />
								</svg>
								<?php echo $area->point_3 ?>
							</h5>
						</div>
						<div class="col-sm-10 col-md-6 col-lg-6">
							<h5>
								<svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="green" class="bi bi-check-square-fill" viewBox="0 0 16 16">
									<path d="M2 0a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2h4zm10.03 4.97a.75.75 0 0 1 .011 1.05l-3.992 4.99a.75.75 0 0 1-1.08.02L4.324 8.384a.75.75 0 1 1 1.06-1.06l2.094 2.093 3.473-4.425a.75.75 0 0 1 1.08-.022z" />
								</svg>
								<?php echo $area->point_4 ?>
							</h5>
						</div>
					</div>
				</div>
			</div>
		</div>

		<!-- Card Section -->
		<div class="container">
			<div class="row">
				<div class="col text-center">
					<h1 class="display-5 fs-4"><?php echo $area->section_2_title ?></h1>
				</div>
			</div>

			<!-- Cards -->
			<div class="row">
				<?php
				foreach ($area->card_title as $i => $value) {
					if ($area->card_section[$i] == 1) {
						echo '<div class="col-sm-12 col-md-6 col-lg-4"><div class="card" style="width: 18rem;"><div class="card-body">';
						echo '<h5 class="card-title">' . $value . '</h5>';
						echo '<p class="card-text">' . $area->card_text[$i] . '</p>';
						echo '</div></div></div>';
					}
				}
				?>
			</div>
		</div>

		<!-- Template Section -->

		<!-- Section 4 -->
		<div class="container">
			<div class="row">
				<div class="col text-center">
					<h1 class="display-5 fs-4"><?php echo $area->section_4_title ?></h1>
				</div>
			</div>

			<!-- Cards -->
			<div class="row">
				<?php
				foreach ($area->card_title as $i => $value) {
					if ($area->card_section[$i] == 2) {
						echo '<div class="col-sm-12 col-md-6 col-lg-4"><div class="card" style="width: 18rem;"><div class="card-body">';
						echo '<h5 class="card-title">' . $value . '</h5>';
						echo '<p class="card-text">' . $area->card_text[$i] . '</p>';
						echo '</div></div></div>';
					}
				}
				?>
			</div>
		</div>
	</main>

	<?php
	//Footer
	include('./assets/components/footer.php');
	?>
</body>

</html>