<?php

$servername = "192.168.178.29";
$usernamephp = "root";
$password = "password";
$dbname = "usrname";

$conn = new mysqli($servername, $usernamephp, $password, $dbname);

if($conn->connect_error){
    die($conn->connect_error);
}

$sql = "INSERT INTO userdaten(name,username,userpassword) VALUES('test','usrname','usrpass')";

if($conn->query($sql)===TRUE){
    echo "inserted data";
}else{
    echo "failed";
}

$conn->close();

?>