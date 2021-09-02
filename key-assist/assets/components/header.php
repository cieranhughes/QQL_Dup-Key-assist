<header>
	<div class="container-fluid">
		<div class="row">
			<nav class="navbar navbar-expand-lg navbar-dark fixed-top nav-color">
				<div class="container">
					<a class="navbar-brand" href="/">
						<img src="/assets/img/logo.png" alt="logo" width="233px" height="51px" class="d-inline-block align-text-top">
					</a>
					<button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
						<span class="navbar-toggler-icon"></span>
					</button>
					<div class="collapse navbar-collapse" id="navbarSupportedContent">
						<ul class="navbar-nav me-auto mb-2 mb-lg-0">
							<li class="nav-item dropdown">
								<a class="nav-text nav-link dropdown-toggle fw-bold fs-4" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
									Services
								</a>
								<ul class="dropdown-menu" aria-labelledby="navbarDropdown">

									<?php
									$sql = "SELECT service_id, name FROM `Services`";
									$stmt = mysqli_stmt_init($dbconnect);
									mysqli_stmt_prepare($stmt, $sql);
									mysqli_stmt_execute($stmt);
									$results = mysqli_stmt_get_result($stmt);
									while ($r = mysqli_fetch_array($results)) {
										echo '<li><a class="dropdown-item" href="/services.php?id=' . $r['service_id'] . '">' . $r['name'] .'</a></li>';
									}
									mysqli_stmt_close($stmt);
									mysqli_close($dbconnect);

									?>

									<li>
										<hr class="dropdown-divider">
									</li>
									<li><a class="dropdown-item" href="#">View All Services</a></li>
								</ul>
							</li>
							<li class="nav-item dropdown">
								<a class="nav-text nav-link dropdown-toggle fw-bold fs-4" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
									Areas
								</a>
								<ul class="dropdown-menu" aria-labelledby="navbarDropdown">
									<li><a class="dropdown-item" href="#">Action</a></li>
									<li><a class="dropdown-item" href="#">Another action</a></li>
									<li>
										<hr class="dropdown-divider">
									</li>
									<li><a class="dropdown-item" href="#">Something else here</a></li>
								</ul>
							</li>
						</ul>
					</div>
				</div>
			</nav>
		</div>
	</div>
</header>