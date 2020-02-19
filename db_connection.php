<?php
$DB_host = "localhost";
$mysql_database="weird_bot";
$mysql_username="root";
$mysql_password="";
$link = mysqli_connect($DB_host,$mysql_username,$mysql_password);
mysqli_select_db($link,$mysql_database);
?>
