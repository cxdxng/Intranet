<?php
require "init.php";

/*
$name = $_POST["name"];
$user_name = $_POST["user_name"];
$user_pass = $_POST["user_pass"];

*/

$name = "test";
$user_name = "cxdxng";
$user_pass = "leckmich";

$sql = "INSERT INTO usrdat(name, user_name, user_pass) VALUES ('hello', 'user_lul', 'user_megalul')";

if (mysqli_query($con, $sql)){
	echo "Data Insertion Success!";
}else{
	echo "Data Insertion error".mysqli_error($con);
}


?>