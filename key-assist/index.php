<!DOCTYPE html>
<html lang="en">

<?php
$page_title = 'Home';

//Connection File
include('assets/config/db_connect.php');

//Head
include('./assets/components/head.php');
?>

<body>
	<?php
	//Header
	include('./assets/components/header.php');
	?>

	<main>
		<!-- Title Block -->
		<div class="container">
			<div class="row">
				<div class="col text-center">
					<h1 class="display-5 fs-4">Call Us Now:</h1>
					<h1 class="display-6 fw-bold text-phone fs-4">03301 072349</h1>
					<p class="text-muted">local rate number</p>
				</div>
			</div>
		</div>

		<!-- Img Overlay Section -->
		<div class="container-fluid img-overlay">
			<div class="container">
				<div class="row">
					<div class="col">
						<h1>At Key Assist we are here 24/7 to help you with your key-related problems</h1>
					</div>
				</div>
				<div class="row mt-2 mb-3">
					<div class="col-sm-10 col-md-6 col-lg-6">
						<h4>
							<svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="green" class="bi bi-check-square-fill" viewBox="0 0 16 16">
								<path d="M2 0a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2h4zm10.03 4.97a.75.75 0 0 1 .011 1.05l-3.992 4.99a.75.75 0 0 1-1.08.02L4.324 8.384a.75.75 0 1 1 1.06-1.06l2.094 2.093 3.473-4.425a.75.75 0 0 1 1.08-.022z" />
							</svg>
							Experienced Specialists
						</h4>
					</div>
					<div class="col-sm-10 col-md-6 col-lg-6">
						<h4>
							<svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="green" class="bi bi-check-square-fill" viewBox="0 0 16 16">
								<path d="M2 0a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2h4zm10.03 4.97a.75.75 0 0 1 .011 1.05l-3.992 4.99a.75.75 0 0 1-1.08.02L4.324 8.384a.75.75 0 1 1 1.06-1.06l2.094 2.093 3.473-4.425a.75.75 0 0 1 1.08-.022z" />
							</svg>
							Fixed Fee Call Out
						</h4>
					</div>
					<div class="col-sm-10 col-md-6 col-lg-6">
						<h4>
							<svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="green" class="bi bi-check-square-fill" viewBox="0 0 16 16">
								<path d="M2 0a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2h4zm10.03 4.97a.75.75 0 0 1 .011 1.05l-3.992 4.99a.75.75 0 0 1-1.08.02L4.324 8.384a.75.75 0 1 1 1.06-1.06l2.094 2.093 3.473-4.425a.75.75 0 0 1 1.08-.022z" />
							</svg>
							Over 12,000 people have used Key Assist in 2021
						</h4>
					</div>
					<div class="col-sm-10 col-md-6 col-lg-6">
						<h4>
							<svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="green" class="bi bi-check-square-fill" viewBox="0 0 16 16">
								<path d="M2 0a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2h4zm10.03 4.97a.75.75 0 0 1 .011 1.05l-3.992 4.99a.75.75 0 0 1-1.08.02L4.324 8.384a.75.75 0 1 1 1.06-1.06l2.094 2.093 3.473-4.425a.75.75 0 0 1 1.08-.022z" />
							</svg>
							Nationwide Service
						</h4>
					</div>
				</div>
				<div class="row call-button">
					<div class="d-grid gap-2 col-md-6 col-lg-4 mx-auto">
						<button type="button" class="btn btn-success border border-white border-4">
							<div class="fs-4">
								Call Us Now
								<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-arrow-right-circle-fill" viewBox="0 0 16 16">
									<path d="M8 0a8 8 0 1 1 0 16A8 8 0 0 1 8 0zM4.5 7.5a.5.5 0 0 0 0 1h5.793l-2.147 2.146a.5.5 0 0 0 .708.708l3-3a.5.5 0 0 0 0-.708l-3-3a.5.5 0 1 0-.708.708L10.293 7.5H4.5z"></path>
								</svg>
							</div>
						</button>
					</div>
				</div>
			</div>
		</div>

		<!-- Card section -->
		<div class="container">
			<div class="row">
				<div class="col text-center mt-4">
					<h4>Find a Local Trusted Locksmith Near You</h4>
					<p class="text-muted">Locked keys in your car? Lost your car keys? Need your remote or fob fixed? At Key Assist, our team has the proper experience and equipment to help 24/7 in any Emergency Locksmith case.</p>
					<p class="text-muted">See below to find out what services we offer.</p>
				</div>
			</div>

			<!-- Cards -->
			<div class="row">
				<div class="col-sm-12 col-md-6 col-lg-4 mb-3">
					<div class="card text-center">
						<div class="card-header">
							<div class="row justify-content-center align-items-center">
								<div class="col">
									<img src="assets/img/icon1.png" alt="icon">
								</div>
								<div class="col">
									Find an Auto Locksmith Near You
								</div>
							</div>
						</div>
						<div class="card-body">
							<p class="card-text">Find an auto locksmith near you to help with lost car keys, provide replacement car keys, repair car keys and help if you are locked out of your car. With 100's of specialist locksmiths, we can help you, no matter where you are in the UK or what type of vehicle.</p>
							<div class="call-button d-grid gap-2 col-sm-10 col-md-10 col-lg-8 mx-auto">
								<button type="button" class="btn btn-success border border-white border-4">
									<div class="fs-4">
										Call Us Now
										<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-arrow-right-circle-fill" viewBox="0 0 16 16">
											<path d="M8 0a8 8 0 1 1 0 16A8 8 0 0 1 8 0zM4.5 7.5a.5.5 0 0 0 0 1h5.793l-2.147 2.146a.5.5 0 0 0 .708.708l3-3a.5.5 0 0 0 0-.708l-3-3a.5.5 0 1 0-.708.708L10.293 7.5H4.5z"></path>
										</svg>
									</div>
								</button>
							</div>
						</div>
					</div>
				</div>

				<div class="col-sm-12 col-md-6 col-lg-4 mb-3">
					<div class="card text-center">
						<div class="card-header">
							<div class="row justify-content-center align-items-center">
								<div class="col">
									<img src="assets/img/icon2.png" alt="icon">
								</div>
								<div class="col">
									Car Key Cutting & Programming
								</div>
							</div>
						</div>
						<div class="card-body">
							<p class="card-text">Find an auto locksmith near you to help with lost car keys, provide replacement car keys, repair car keys and help if you are locked out of your car. With 100's of specialist locksmiths, we can help you, no matter where you are in the UK or what type of vehicle.</p>
							<div class="call-button d-grid gap-2 col-sm-10 col-md-10 col-lg-8 mx-auto">
								<button type="button" class="btn btn-success border border-white border-4">
									<div class="fs-4">
										Call Us Now
										<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-arrow-right-circle-fill" viewBox="0 0 16 16">
											<path d="M8 0a8 8 0 1 1 0 16A8 8 0 0 1 8 0zM4.5 7.5a.5.5 0 0 0 0 1h5.793l-2.147 2.146a.5.5 0 0 0 .708.708l3-3a.5.5 0 0 0 0-.708l-3-3a.5.5 0 1 0-.708.708L10.293 7.5H4.5z"></path>
										</svg>
									</div>
								</button>
							</div>
						</div>
					</div>
				</div>

				<div class="col-sm-12 col-md-6 col-lg-4 mb-3">
					<div class="card text-center">
						<div class="card-header">
							<div class="row justify-content-center align-items-center">
								<div class="col">
									<img src="assets/img/icon3.png" alt="icon">
								</div>
								<div class="col">
									Replacement Keys
								</div>
							</div>
						</div>
						<div class="card-body">
							<p class="card-text">Find an auto locksmith near you to help with lost car keys, provide replacement car keys, repair car keys and help if you are locked out of your car. With 100's of specialist locksmiths, we can help you, no matter where you are in the UK or what type of vehicle.</p>
							<div class="call-button d-grid gap-2 col-sm-10 col-md-10 col-lg-8 mx-auto">
								<button type="button" class="btn btn-success border border-white border-4">
									<div class="fs-4">
										Call Us Now
										<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-arrow-right-circle-fill" viewBox="0 0 16 16">
											<path d="M8 0a8 8 0 1 1 0 16A8 8 0 0 1 8 0zM4.5 7.5a.5.5 0 0 0 0 1h5.793l-2.147 2.146a.5.5 0 0 0 .708.708l3-3a.5.5 0 0 0 0-.708l-3-3a.5.5 0 1 0-.708.708L10.293 7.5H4.5z"></path>
										</svg>
									</div>
								</button>
							</div>
						</div>
					</div>
				</div>

				<div class="col-sm-12 col-md-6 col-lg-4 mb-3">
					<div class="card text-center">
						<div class="card-header">
							<div class="row justify-content-center align-items-center">
								<div class="col">
									<img src="assets/img/icon4.png" alt="icon">
								</div>
								<div class="col">
									Types of Car Key Repairs
								</div>
							</div>
						</div>
						<div class="card-body">
							<p class="card-text">Find an auto locksmith near you to help with lost car keys, provide replacement car keys, repair car keys and help if you are locked out of your car. With 100's of specialist locksmiths, we can help you, no matter where you are in the UK or what type of vehicle.</p>
							<div class="call-button d-grid gap-2 col-sm-10 col-md-10 col-lg-8 mx-auto">
								<button type="button" class="btn btn-success border border-white border-4">
									<div class="fs-4">
										Call Us Now
										<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-arrow-right-circle-fill" viewBox="0 0 16 16">
											<path d="M8 0a8 8 0 1 1 0 16A8 8 0 0 1 8 0zM4.5 7.5a.5.5 0 0 0 0 1h5.793l-2.147 2.146a.5.5 0 0 0 .708.708l3-3a.5.5 0 0 0 0-.708l-3-3a.5.5 0 1 0-.708.708L10.293 7.5H4.5z"></path>
										</svg>
									</div>
								</button>
							</div>
						</div>
					</div>
				</div>

				<div class="col-sm-12 col-md-6 col-lg-4 mb-3">
					<div class="card text-center">
						<div class="card-header">
							<div class="row justify-content-center align-items-center">
								<div class="col">
									<img src="assets/img/icon1.png" alt="icon">
								</div>
								<div class="col">
									Lost Car Keys
								</div>
							</div>
						</div>
						<div class="card-body">
							<p class="card-text">Find an auto locksmith near you to help with lost car keys, provide replacement car keys, repair car keys and help if you are locked out of your car. With 100's of specialist locksmiths, we can help you, no matter where you are in the UK or what type of vehicle.</p>
							<div class="call-button d-grid gap-2 col-sm-10 col-md-10 col-lg-8 mx-auto">
								<button type="button" class="btn btn-success border border-white border-4">
									<div class="fs-4">
										Call Us Now
										<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-arrow-right-circle-fill" viewBox="0 0 16 16">
											<path d="M8 0a8 8 0 1 1 0 16A8 8 0 0 1 8 0zM4.5 7.5a.5.5 0 0 0 0 1h5.793l-2.147 2.146a.5.5 0 0 0 .708.708l3-3a.5.5 0 0 0 0-.708l-3-3a.5.5 0 1 0-.708.708L10.293 7.5H4.5z"></path>
										</svg>
									</div>
								</button>
							</div>
						</div>
					</div>
				</div>

				<div class="col-sm-12 col-md-6 col-lg-4 mb-3">
					<div class="card text-center">
						<div class="card-header">
							<div class="row justify-content-center align-items-center">
								<div class="col">
									<img src="assets/img/icon6.png" alt="icon">
								</div>
								<div class="col">
									Car Re-entry Service
								</div>
							</div>
						</div>
						<div class="card-body">
							<p class="card-text">Find an auto locksmith near you to help with lost car keys, provide replacement car keys, repair car keys and help if you are locked out of your car. With 100's of specialist locksmiths, we can help you, no matter where you are in the UK or what type of vehicle.</p>
							<div class="call-button d-grid gap-2 col-sm-10 col-md-10 col-lg-8 mx-auto">
								<button type="button" class="btn btn-success border border-white border-4">
									<div class="fs-4">
										Call Us Now
										<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-arrow-right-circle-fill" viewBox="0 0 16 16">
											<path d="M8 0a8 8 0 1 1 0 16A8 8 0 0 1 8 0zM4.5 7.5a.5.5 0 0 0 0 1h5.793l-2.147 2.146a.5.5 0 0 0 .708.708l3-3a.5.5 0 0 0 0-.708l-3-3a.5.5 0 1 0-.708.708L10.293 7.5H4.5z"></path>
										</svg>
									</div>
								</button>
							</div>
						</div>
					</div>
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