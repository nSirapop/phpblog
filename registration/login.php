<?php include 'C:\xampp\htdocs\Blog\base.php'; ?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title></title>
	<link rel="stylesheet" href="">
	<h3>Log in to your account.</h3>
</head>
<body>
	<form action="" method="post">
		Username
		<input type="text" name="username" required>
		<br>
		Password
		<input type="password" name="password" required>
		<br>
		<button name="submit" class="btn btn-primary">Log in</button>
		<input type="hidden" name="next" value="index.php" />
	</form>
</body>
</html>