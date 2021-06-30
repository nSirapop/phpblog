<?php session_start(); ?>
<!DOCTYPE html>
<html>
	<head>
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
		<!-- Bootstrap CSS -->
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
		<title>Blog for Everyone</title>
		<link rel="stylesheet" href="">
	</head>
	<body>
		<nav class="navbar navbar-expand-md navbar-light bg-light mb-4 border">
			<a class="navbar-brand" href="index.php">Home</a>
			<button class="navbar-toggler" type="button"
			data-toggle="collapse"
			data-target="#navbarCollapse"
			aria-controls="navbarCollapse"
			aria-expanded="false"
			aria-label="Toggle navigation">
			<span class="navbar-toggler-icon"></span>
			</button>
			<div class="collapse navbar-collapse" id="navbarCollapse">
				<ul class="navbar-nav mr-auto">
					<li class="nav-item">
						<a class="nav-link" href="blogs.php">Blogs</a></li>
					</ul>
					<ul class="navbar-nav ml-auto">
						<!-- logged in user information -->
						<!-- if already logged in -->
						<?php if(isset($_SESSION['username'])) { ?>
							<li class="nav-item">
								<span class="navbar-text">Hello, <?php echo $_SESSION['username']; ?>.</span>
							</li>
							<li class="nav-item">
								<a class="nav-link" href="logout.php">Log out</a>
							</li>
						<?php }
							// not logged in yet
							else{ ?> 
							<li class="nav-item">
								<a class="nav-link" href="register.php">Register</a>
							</li>
							<li class="nav-item">
								<a class="nav-link" href="login.php">Log in</a></li>
							<?php } ?>
						</ul>
					</div>
				</nav>
					<main role="main" class="container">
						
					
			</main>
			<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
			<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
			<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
		</body>
	</html>
	
</body>
</html>