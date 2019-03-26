<?php
$db_name = "usrname";
$mysql_username = "root";
$mysql_pass = "password";
$server_name = "192.168.178.29";

$con = mysqli_connect($server_name, $mysql_username, $mysql_pass, $db_name);	
	
if(!$con){
	echo "fail".mysqli_connect_error();
	
}else{
	echo "<h3>Database Connection Successful!<h3>";
	
}
	
?>