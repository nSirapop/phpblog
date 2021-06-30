<?php
include 'condb.php';
include 'base.php';
?>
<!DOCTYPE html>
<html lang="en">
	<head>
		<!-- Required meta tags -->
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
		<title>Page Title</title>
	</head>
	<body>
		<div class="container">
			<div class="row">
				<div class="col-md-12">
					<h3>Add a new post</h3>
					<hr>
					<form action="add_post_db.php" method="post">
						<div class="form-group row">
						<label for="title" class="col-sm-1">Subject:</label>
						<input type="text" name="title" class="form-control" placeholder="Subject" required>
					</div>
						<div class="form-group row">
						<label for="text" class="col-sm-1">Content:</label>
						<textarea name="text" class="form-control" rows="10" placeholder="Content" required></textarea>
					</div>
						<br>
						<button type="submit" class="btn btn-primary"> Add post </button>
					</form>
				</div>
			</div>
		</div>
	</body>
</html>