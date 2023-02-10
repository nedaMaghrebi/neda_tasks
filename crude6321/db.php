<?php
$servername="db";
$username="capp6321";
$password="Salamat123456789";
$dbname="capp6321";

// creating connection
$conn= new mysqli($servername, $username, $password, $dbname);


// check the connection
if($conn->connect_error){
    die("connection failed:" .$conn->connect_error);
}



?>