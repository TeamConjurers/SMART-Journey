<?php
//Get Heroku ClearDB connection information
$cleardb_url = parse_url(getenv("mysql://b0736b70925e02:3c2eb69c@us-cdbr-east-05.cleardb.net/heroku_db0ef09713264fd?reconnect=true"));
$cleardb_server = $cleardb_url["us-cdbr-east-05.cleardb.net"];
$cleardb_username = $cleardb_url["b0736b70925e02"];
$cleardb_password = $cleardb_url["3c2eb69cpass"];
$cleardb_db = substr($cleardb_url["http://localhost/phpmyadmin/index.php?route=/database/structure&server=2&server=2&db=heroku_db0ef09713264fd"],1);
$active_group = 'default';
$query_builder = TRUE;
// Connect to DB
$conn = mysqli_connect($cleardb_server, $cleardb_username, $cleardb_password, $cleardb_db);
?>

