<?php
$servername="localhost";
$username="root";
$password="usbw";
$dbname="Cinema";
//Create connection
$con = mysqli_connect($servername, $username, $dbname);
//Check connection
if (!$con) {
	die("Connection failed: " . mysqli_connect_error());
}