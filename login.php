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
					<h2>Log in to your account.</h2>
					<hr>
					<form action="login_db.php" method="post">
						<?php include('errors.php'); ?>
						<?php if (isset($_SESSION['error'])) : ?>
						<div class="error">
							<h3>
							<?php
								echo $_SESSION['error'];
								unset($_SESSION['error']);
							?>
							</h3>
						</div>
						<?php endif ?>
						<div class="form-group row">
							<label for="username">Username</label>
							<input type="text" name="username" class="form-control" placeholder="Username" required>
						</div>
						<div class="form-group row">
							<label for="password">Password</label>
							<input type="password" name="password" class="form-control" placeholder="Password" required>
						</div>
						<button type="submit" name="login_user" class="btn btn-primary">Log in</button>
						
					</form>
				</div>
			</div>
		</div>
	</body>
</html>