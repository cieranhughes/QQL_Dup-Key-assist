<!-- Info Section -->
<div class="container-fluid background-grey">
	<div class="container">
		<div class="row pt-3">
			<!-- Text -->
			<div class="col">
				<h4 class="mt-3 mb-3"><?php echo $area->text[0]; ?></h4>
				<p class="text-muted"><?php echo $area->text[1]; ?></p>
				<ul>
					<?php
					foreach ($area->bullet_text[0] as &$value) {
						echo '<li>' . $value . '</li>';
					}
					?>
				</ul>
				<p class="text-muted"><?php echo $area->text[2]; ?></p>
				<h4 class="mt-3 mb-3"><?php echo $area->text[3]; ?></h4>
				<p class="text-muted mb-5"><?php echo $area->text[4]; ?></p>
			</div>
		</div>
	</div>
</div>