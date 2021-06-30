<?php include 'base.php'; ?>
<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<title></title>
		<link rel="stylesheet" href="">
	</head>
	<body>
		<div class="container">
			<div class="form-group row">
				<div class="col-md-12">
					<h3>Add a new blog</h3>
					<hr>
					<form method='post' action="add_blog_db.php" >
						<div class="col-sm-5"> <!-- ทำให้ช่องกรอกฟอร์มสั้นลง -->
						<input type="text" class="form-control" name="title" required>
					</div>
					<br>
					<button name="submit" class="btn btn-outline-primary">Add blog</button>
			</form>
		</div>
	</div>
</div>
</body>
</html>