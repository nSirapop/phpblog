<?php
$condb = mysqli_connect("localhost","root","","blog_project") or die("Error: ".$mysqli_error($condb));

//set utf8: work perfectly with thai language
mysqli_query($condb, "SET NAMES 'utf8' ");


//set time zone
date_default_timezone_set('Asia/Bangkok');
//echo date('Y-m-d H:i:s');


?>