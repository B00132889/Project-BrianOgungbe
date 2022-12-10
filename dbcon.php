<?php
$servername="localhost";
$username="root";
$password="";
$dbname="cinema";
$port = 3306;
//Create connection
$con = mysqli_connect($servername, $username, $password, $dbname, $port);
//Check connection
if (!$con) {
	die("Connection failed: " . mysqli_connect_error());
}

?>