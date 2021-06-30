<?php
include 'base.php'; ?>
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
					<h3>Registration process</h3>
					<hr>
					<form action="register_db.php" method="post">
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
							<input type="text" name="username" class="form-control" placeholder="Username" aria-describedby="usernameHelp" required>
							<small id="usernameHelp" class="form-text text-muted">Required. 150 characters or fewer. Letters, digits and @/./+/-/_ only.</small>
						</div>
						
						<div class="form-group row">
							<label for="password1" >Password</label>
							<input type="password" name="password1" class="form-control" placeholder="Passsword" aria-describedby="password1Help" required>
							<small id="password1Help" class="form-text text-muted">
							<ul>
								<li>Your password can’t be too similar to your other personal information.</li>
								<li>Your password must contain at least 8 characters.</li>
								<li>Your password can’t be a commonly used password.</li>
								<li>Your password can’t be entirely numeric.</li>
							</ul>
							</small>
						</div>
						<div class="form-group row">
							<label for="password2">Password confirmation</label>
							<input type="password" name="password2" class="form-control" placeholder="Password confirmation" aria-describedby="password2Help" required>
							<small id="password2Help" class="form-text text-muted">Enter the same password as before, for verification.</small>
						</div>
						<button type="submit" name="reg_user" class="btn btn-primary"> Register </button>
					</form>
				</div>
			</div>
		</div>
		
	</body>
</html>