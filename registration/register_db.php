<?php
include 'condb.php'; //เชื่อมต่อ database กับอันนี้

//เช็คข้อมูลจากฟอร์ม
// echo '<pre>';
// print_r($_POST);
// echo '</pre>';

// echo '<hr>';

// echo '<pre>';
// var_dump($_POST);
// echo '</pre>';

$errors = array();

//จากนั้นประกาศตัวแปร รับค่าจากฟอร์ม
	$username = $_POST['username'];
	$password1 = $_POST['password1'];
	$password2 = $_POST['password2'];

	if($password != $password2){
		array_push($errors, "The two password fields didn't match.");
	}
	$user_check_query = "SELECT * FROM blog_member WHERE username = '$username' OR email = '$email'";


	
//เอาตัวแปรมาโยน insert into table

	$sql = "INSERT INTO blog_member
	(
	username,
	password,
	)
	VALUES
	(
	'$username',
	'$password',
	)
	";

// เช็คว่าตัวแปรที่เชื่อมกับ database มันถูกต้องไหม ถ้าผิดก็แสดงเออเร่อ
$result = mysqli_query($condb, $sql) or die("Error in sql : $sql". mysqli_error($sql));

if ($result) {
	if ($result['username'] === $username){
		array_push($error, "Username already exists");
	}
	if ($result['email'] === $email){
		array_push($errors, "Email already exists");
	}
}

// ใช้เสร็จก็ปิด คืน database เขาไป
mysqli_close($condb);

// echo $sql;
// echo '<hr>'; เทสเสร็จแล้วก็ทำคอมเม้น

//เช็คว่ามันทำงานสำเร็จไหม ถ้าสำเร็จก็ประกาศ ถ้าไม่สำเร็จก็บอกว่าเออเร่อ
if($result){
	echo "<script type='text/javascript'>"; //เปิดแท็ก
		echo "alert('Register Successfully');"; //การบอกวิธีนึง
		echo "window.location = 'member_list.php';"; //ใส่ชื่อไฟล์ที่ต้องการให้มันกระโดดไป
	echo "</script>"; //ปิดแท็ก
}else{
	echo "<script type='text/javascript'>"; //เปิดแท็ก
		echo "alert('Error !!');"; //การบอกวิธีนึง
		echo "window.location = 'member_list.php';"; //ใส่ชื่อไฟล์ที่ต้องการให้มันกระโดดไป
	echo "</script>"; //ปิดแท็ก
}
//ถ้าเออเร่อให้ก๊อปอันนั้นไปวางในตาราง หน้า sql แล้ว go มันจะบอกว่าอะไรเออเร่อ
?>