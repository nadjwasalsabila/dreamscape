<?php
date_default_timezone_set('Asia/Jakarta');

$servername = "localhost";
$username = "root";
$password = "";
$db = "webdream";

//create connection
$conn = new mysqli($servername, $username,$password,$db);

//check connection
if($conn->connect_error){
    die("Connection failed : ".
    $conn->connection_error);
}


?>