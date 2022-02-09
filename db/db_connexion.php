<?php  

$sname = "remotemysql.com";
$uname = "05Xtr7VY0s";
$password = "GJYzoMPOZ8";

$db_name = "05Xtr7VY0s";

$conn  = mysqli_connect($sname, $uname, $password, $db_name);

if (!$conn) {
	echo "Connection failed!";
}