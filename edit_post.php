<?php include 'base.php';
include 'condb.php';
$id = $_GET['id'];
$query = "SELECT * FROM post WHERE id=$id";
$result = mysqli_query($condb, $query) or die("Error in sql : $query". mysqli_error($query));
$row = mysqli_fetch_array($result);
?>
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
			<div class="row">
				<div class="col-md-12">
					<h3>Edit a post</h3>
					<hr>
					<form action="edit_post_db.php" method="post">
						<div class="form-group row">
							<label for="title" class="col-sm-1">Subject:</label>
							<input type="text" name="title" class="form-control" placeholder="Subject" required 
								value="<?php echo $row['title'];?>">
						</div>
						<div class="form-group row">
							<label for="text" class="col-sm-1">Content:</label>
							<textarea name="text" class="form-control" rows="10" placeholder="Content" required><?php echo $row['post_text'];?></textarea>
						</div>
						<button type="submit" class="btn btn-primary"> Add post </button>
					</form>
				</div>
			</div>
		</div>
	</body>
</html>