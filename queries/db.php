<?php
$host = "localhost";
$username = "root";
$password = "";
$db_name = "db";
$con = mysqli_connect($host,$username,$password, $db_name);
if($con){
	echo "Connected Successfully";
}else{
    die("Connection failed: " . $con->connect_error);
}

?>