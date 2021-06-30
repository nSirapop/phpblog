<?php include 'base.php';
include 'condb.php';
$id = $_GET['id'];
$query = "SELECT * FROM post WHERE id=$id";
$result = mysqli_query($condb, $query) or die("Error in sql : $query". mysqli_error($query));
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
	
</body>
</html>