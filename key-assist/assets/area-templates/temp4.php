<!-- Info Section -->
<div class="container-fluid background-grey">
	<div class="container">
		<div class="row pt-3">
			<!-- Text -->
			<div class="col">
				<h1 class="display-5 fs-3 fw-bold"><?php echo $area->text[0]; ?></h1>
				<p class="text-muted"><?php echo $area->text[1]; ?></p>
				<ul>
					<?php
					foreach ($area->bullet_text[0] as &$value) {
						echo '<li>' . $value . '</li>';
					}
					?>
				</ul>
				<h1 class="display-5 fs-3 fw-bold"><?php echo $area->text[2]; ?></h1>
				<p class="text-muted"><?php echo $area->text[3]; ?></p>
			</div>
		</div>
	</div>
</div>