<?php include 'base.php'; 
include 'condb.php';

if(!isset($_SESSION['username'])){
		header('location: login.php');
	}

$query = "SELECT * FROM blog";
$result = mysqli_query($condb, $query) or die("Error in sql : $query". mysqli_error($query));
	

?>

<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<title></title>
		<link rel="stylesheet" href="">
	</div>
</head>
<body>
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<h1>Blogs</h1>
				<hr>
				<ul>
					<?php foreach ($result as $one) { ?>
						<li><h4>
							<a href="blog.php?id=<?php echo $one['id'];?>"><?php echo $one['title'];?></a>
							</h4></li>
							<?php if(!$result) : ?>
							<li><h4>There is no blog yet.</h4></li>
						<?php endif ?>
					<?php } ?>
					</ul>
					<h5><a href="add_blog.php?user_id=<?php echo $one['user_id'];?>">Add blog</a></h5>
				</div>
			</div>
		</div>
	</body>
</html>