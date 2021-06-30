<?php
$condb = mysqli_connect("localhost","root","","blog_project") or die("Error: ".$mysqli_error($condb));

//set utf8: work perfectly with thai language
mysqli_query($condb, "SET NAMES 'utf8' ");


//set time zone
date_default_timezone_set('Asia/Bangkok');
//echo date('Y-m-d H:i:s');

// $cleardb_url = parse_url(getenv("CLEARDB_DATABASE_URL"));
// $cleardb_server = $cleardb_url["host"];
// $cleardb_username = $cleardb_url["user"];
// $cleardb_password = $cleardb_url["pass"];
// $cleardb_db = substr($cleardb_url["path"],1);
// $active_group = 'default';
// $query_builder = TRUE;

// $condb = mysqli_connect($cleardb_server, $cleardb_username, $cleardb_password, $cleardb_db);

?>