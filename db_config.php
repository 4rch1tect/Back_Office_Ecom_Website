<?php  

$sname = "localhost";
$uname = "root";
$password = "";

$db_name = "leflef";

$config  = mysqli_connect($sname, $uname, $password, $db_name);

if (!$config) {
	echo "Connection failed!";
}