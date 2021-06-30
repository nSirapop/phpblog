<?php
	session_start();
	include 'condb.php';

	$errors = array();

	if (isset($_POST['login_user'])) {
		$username = mysqli_real_escape_string($condb, $_POST['username']);
		$password = mysqli_real_escape_string($condb, $_POST['password']);

		if(count($errors) == 0) {
			$password = md5($password);
			$query = "SELECT * FROM user WHERE username = '$username' AND password = '$password' ";
			$result = mysqli_query($condb, $query);

			if (mysqli_num_rows($result) != 1){ #ติดตรงนี้ ต้อง == 1 แต่มันไม่ได้
				$_SESSION['username'] = $username;
				$_SESSION['success'] = "You are now logged in";
				header("location: index.php");
			} else{
				array_push($errors, "Please enter a correct username and password. Note that both fields may be case-sensitive."); 
				#ขึ้นประกาศในหน้านั้น สีแดง กดปิดได้)
				$_SESSION['error'] = "Please enter a correct username and password. Note that both fields may be case-sensitive.";
				header("location: login.php");
			}
		}else {
            array_push($errors, "Username & Password is required");
            $_SESSION['error'] = "Username & Password is required";
            header("location: login.php");
        }
	}
	

?>