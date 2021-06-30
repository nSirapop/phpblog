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
					<h3><?php echo $row['title'] ?></h3>
					<hr>
					<div class="container-fluid">
					<p><?php echo $row['post_text'] ?></p>
					<p><?php echo $row['date_save'] ?></p>
				</div>
				<h6><a href="edit_post.php?id=<?php echo $row['id'];?>">Edit post</a></h6>
				</div>
			</div>
		</div>
	</body>
</html>