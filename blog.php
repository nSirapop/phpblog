<?php 
include 'base.php'; 
include 'condb.php';


// ไอดีที่ส่งมา
$id = $_GET['id'];
//$query = "SELECT * FROM blog WHERE";
$query = "SELECT * FROM post WHERE blog_id=$id"; # อันนี้ได้
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
				<p></p>
  <h5><a href="add_post.php?id=<?php echo $id;?>">Add post</a></h5>
  <p></p>
   <?php foreach ($result as $one) { ?>
      <div class="card mb-3">
        <h5 class="card-header">
          <a href="post.php?id=<?php echo $one['id'];?>"><?php echo $one['title']; ?></a>
          <p><small class="text-muted"><?php echo $one['date_save'];?></small></p>
        </h5>
      </div>
    <?php if(!$result) : ?>
      <p>There has no post in this blog yet.</p>
    <?php endif ?>
  <?php } ?>
				</div>
			</div>
			<hr>
		</div>
	</body>
</html>