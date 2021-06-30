<?php
	session_start();
	include 'condb.php'; //เชื่อมต่อ database กับอันนี้
	
	$errors = array();
	if(isset($_POST['reg_user'])) {
		$username = mysqli_real_escape_string($condb, $_POST['username']);
		$password1 = mysqli_real_escape_string($condb, $_POST['password1']);
		$password2 = mysqli_real_escape_string($condb, $_POST['password2']);
		if($password1 != $password2){
			array_push($errors, "The two password fields didn't match.");
		}
	
	$user_check_query = "SELECT * FROM user WHERE username = '$username'";
	$query = mysqli_query($condb, $user_check_query);
	$result = mysqli_fetch_assoc($query);
	if ($result) { //เช็คว่ามี user อยู่ในระบบไหม
		if($result['username'] === $username){
			array_push($errors, "Username already exists");
		}
	}
if (count($errors) == 0){
	$password = md5($password_1);
	$sql = "INSERT INTO user (username, password) VALUES ('$username', '$password') ";
	mysqli_query($condb, $sql);
	$_SESSION['username'] = $username;
	$_SESSION['success'] = "You are now logged in";
	header('location: index.php');
}else{
	array_push($errors, "Username already exists"); #ขึ้นประกาศในหน้านั้น สีแดง กดปิดได้
	$_SESSION['error'] = "Username already exists";
	header("location: register.php");
	}
}
?>