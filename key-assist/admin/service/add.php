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
			<form action="./add-handler.php" method="POST">
				<!-- General -->
				<div class="row">
					<div class="col">
						<h1 class="display-6">General Infomation</h1>
					</div>
				</div>
				<div class="mt-3 mb-3 row">
					<label for="name" class="col-sm-2 col-form-label">Service Name:</label>
					<div class="col-sm-10 col-md-6 col-lg-4">
						<input type="text" class="form-control" id="name" placeholder="Name" name="name">
					</div>
				</div>
				<div class="mb-3 row">
					<label for="longname" class="col-sm-2 col-form-label">Service Longname:</label>
					<div class="col-sm-10 col-md-6 col-lg-4">
						<input type="text" class="form-control" id="longname" placeholder="Longname" name="longname">
					</div>
				</div>
				<div class="mb-3 row">
					<label for="tagline" class="col-sm-2 col-form-label">Service Tagline:</label>
					<div class="col-sm-10 col-md-6 col-lg-4">
						<input type="text" class="form-control" id="tagline" placeholder="Tagline" name="tagline">
					</div>
				</div>
				<div class="mb-3 row">
					<label for="description" class="col-sm-2 col-form-label">Service Description:</label>
					<div class="col-sm-10 col-md-6 col-lg-4">
						<textarea class="form-control" id="description" placeholder="Description" rows="3" name="description"></textarea>
					</div>
				</div>

				<!-- Bullet Points -->
				<div class="row">
					<div class="col">
						<h1 class="display-6">Bullet Points</h1>
					</div>
				</div>
				<div class="mt-3 mb-3 row">
					<label for="bullet-point-1" class="col-sm-2 col-form-label">Bullet Point 1:</label>
					<div class="col-sm-10 col-md-6 col-lg-4">
						<input type="text" class="form-control" id="bullet-point-1" placeholder="Bullet point" name="point_1">
					</div>
				</div>
				<div class="mt-3 mb-3 row">
					<label for="bullet-point-2" class="col-sm-2 col-form-label">Bullet Point 2:</label>
					<div class="col-sm-10 col-md-6 col-lg-4">
						<input type="text" class="form-control" id="bullet-point-2" placeholder="Bullet point" name="point_2">
					</div>
				</div>
				<div class="mt-3 mb-3 row">
					<label for="bullet-point-3" class="col-sm-2 col-form-label">Bullet Point 3:</label>
					<div class="col-sm-10 col-md-6 col-lg-4">
						<input type="text" class="form-control" id="bullet-point-3" placeholder="Bullet point" name="point_3">
					</div>
				</div>
				<div class="mt-3 mb-3 row">
					<label for="bullet-point-4" class="col-sm-2 col-form-label">Bullet Point 4:</label>
					<div class="col-sm-10 col-md-6 col-lg-4">
						<input type="text" class="form-control" id="bullet-point-4" placeholder="Bullet point" name="point_4">
					</div>
				</div>

				<!-- Cards -->
				<div class="row">
					<div class="col">
						<h1 class="display-6">Cards</h1>
					</div>
				</div>
				<div class="mt-3 mb-3 row">
					<label for="title" class="col-sm-2 col-form-label">Section Title:</label>
					<div class="col-sm-10 col-md-6 col-lg-4">
						<input type="text" class="form-control" id="title" placeholder="Title" name="section_2_title">
					</div>
				</div>
				<div class="mb-3 row">
					<label for="card-title-1" class="col-sm-2 col-form-label">Card 1 Title:</label>
					<div class="col-sm-10 col-md-6 col-lg-4">
						<input type="text" class="form-control" id="card-title-1" placeholder="Title" name="card_title_1">
					</div>
				</div>
				<div class="mb-3 row">
					<label for="card-text-2" class="col-sm-2 col-form-label">Card 1 Text:</label>
					<div class="col-sm-10 col-md-6 col-lg-4">
						<textarea class="form-control" id="card-text-2" placeholder="Text" rows="3" name="card_text_1"></textarea>
					</div>
				</div>
				<div class="mb-3 row">
					<label for="card-title-2" class="col-sm-2 col-form-label">Card 2 Title:</label>
					<div class="col-sm-10 col-md-6 col-lg-4">
						<input type="text" class="form-control" id="card-title-2" placeholder="Title" name="card_title_2">
					</div>
				</div>
				<div class="mb-3 row">
					<label for="card-text-2" class="col-sm-2 col-form-label">Card 2 Text:</label>
					<div class="col-sm-10 col-md-6 col-lg-4">
						<textarea class="form-control" id="card-text-2" placeholder="Text" rows="3" name="card_text_2"></textarea>
					</div>
				</div>
				<div class="mb-3 row">
					<label for="card-title-3" class="col-sm-2 col-form-label">Card 3 Title:</label>
					<div class="col-sm-10 col-md-6 col-lg-4">
						<input type="text" class="form-control" id="card-title-3" placeholder="Title" name="card_title_3">
					</div>
				</div>
				<div class="mb-3 row">
					<label for="card-text-3" class="col-sm-2 col-form-label">Card 3 Text:</label>
					<div class="col-sm-10 col-md-6 col-lg-4">
						<textarea class="form-control" id="card-text-3" placeholder="Text" rows="3" name="card_text_3"></textarea>
					</div>
				</div>

				<!-- Section 3 -->
				<div class="row">
					<div class="col">
						<h1 class="display-6">Section 3</h1>
					</div>
				</div>
				<div class="mb-3 row">
					<label for="s-3-title" class="col-sm-2 col-form-label">Section Title</label>
					<div class="col-sm-10 col-md-6 col-lg-4">
						<input type="text" class="form-control" id="s-3-title" placeholder="Title" name="section_3_title">
					</div>
				</div>
				<div class="mb-3 row">
					<label for="text-1" class="col-sm-2 col-form-label">Top Text</label>
					<div class="col-sm-10 col-md-6 col-lg-4">
						<textarea class="form-control" id="text-1" placeholder="Top Text" rows="3" name="s_3_top"></textarea>
					</div>
				</div>
				<div class="mb-3 row">
					<label for="text-2" class="col-sm-2 col-form-label">Bottom Text</label>
					<div class="col-sm-10 col-md-6 col-lg-4">
						<textarea class="form-control" id="text-2" placeholder="Top Text" rows="3" name="s_3_bottom"></textarea>
					</div>
				</div>
				

				<!-- FAQ -->
				<div class="row">
					<div class="col">
						<h1 class="display-6">FAQ</h1>
					</div>
				</div>
				<div class="mb-3 row">
					<label for="question-1" class="col-sm-2 col-form-label">Question 1:</label>
					<div class="col-sm-10 col-md-6 col-lg-4">
						<input type="text" class="form-control" id="question-1" placeholder="Question" name="question-1">
					</div>
				</div>
				<div class="mb-3 row">
					<label for="answer-1" class="col-sm-2 col-form-label">Answer 1:</label>
					<div class="col-sm-10 col-md-6 col-lg-4">
						<textarea class="form-control" id="answer-1" placeholder="Answer" rows="3" name="answer-1"></textarea>
					</div>
				</div>
				<div class="mb-3 row">
					<label for="question-2" class="col-sm-2 col-form-label">Question 2:</label>
					<div class="col-sm-10 col-md-6 col-lg-4">
						<input type="text" class="form-control" id="question-2" placeholder="Question" name="question-2">
					</div>
				</div>
				<div class="mb-3 row">
					<label for="answer-2" class="col-sm-2 col-form-label">Answer 2:</label>
					<div class="col-sm-10 col-md-6 col-lg-4">
						<textarea class="form-control" id="answer-2" placeholder="Answer" rows="3" name="answer-2"></textarea>
					</div>
				</div>
				<div class="mb-3 row">
					<label for="question-3" class="col-sm-2 col-form-label">Question 3:</label>
					<div class="col-sm-10 col-md-6 col-lg-4">
						<input type="text" class="form-control" id="question-3" placeholder="Question" name="question-3">
					</div>
				</div>
				<div class="mb-3 row">
					<label for="answer-3" class="col-sm-2 col-form-label">Answer 3:</label>
					<div class="col-sm-10 col-md-6 col-lg-4">
						<textarea class="form-control" id="answer-3" placeholder="Answer" rows="3" name="answer-3"></textarea>
					</div>
				</div>

				<div class="mb-3 row">
					<label for="answer-3" class="col-sm-2 col-form-label"></label>
					<div class=" mt-3 form-group d-grid gap-2 col-sm-6 col-md-8 col-lg-4">
						<input class="btn btn-primary" name="submit" type="submit" value="Add">
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