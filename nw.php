<?php

$servername = "localhost";
$usernamephp = "root";
$password = "password";
$dbname = "usrname";

$name = "test";
$user_name = "cxdxng";
$user_pass = "leckmich";

$conn = new mysqli($servername, $usernamephp, $password, $dbname);

if($conn->connect_error){
    die($conn->connect_error);
}

$sql = "INSERT INTO userdaten(name,username,userpassword) VALUES('$name','$user_name','$user_pass')";

if($conn->query($sql)===TRUE){
    echo "inserted data";
}else{
    echo "failed";
}

$conn->close();

?>