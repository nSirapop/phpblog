<?php
include 'condb.php';

//ประกาศตัวแปร
$blog_id = $_GET['id'];
$title = $_POST['title'];
$text = $_POST['text'];

//โยนตัวแปรใส่ post
$sql = "INSERT INTO post (title, post_text, blog_id) VALUES ('$title', '$text', '$blog_id')";
$result = mysqli_query($condb, $sql) or die("Error in sql : $sql". mysqli_error($sql));

mysql_close($condb);

if($result){
	echo "<script type='text/javascript'>"; //เปิดแท็ก
		echo "alert('Add blog successfully');"; //การบอกวิธีนึง
		echo "window.location = 'blogs.php';"; //ใส่ชื่อไฟล์ที่ต้องการให้มันกระโดดไป
	echo "</script>"; //ปิดแท็ก
}else{
	echo "<script type='text/javascript'>"; //เปิดแท็ก
		echo "alert('Error !!');"; //การบอกวิธีนึง
		echo "window.location = 'add_blog.php';"; //ใส่ชื่อไฟล์ที่ต้องการให้มันกระโดดไป
	echo "</script>"; //ปิดแท็ก
}
//ถ้าเออเร่อให้ก๊อปอันนั้นไปวางในตาราง หน้า sql แล้ว go มันจะบอกว่าอะไรเออเร่อ
?>