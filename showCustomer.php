<?php


include("dbcon.php");

$sql = "select * from customers";
   

$result = mysqli_query($con,$sql);
while($row=mysqli_fetch_assoc($result)) {
	$fn = $row['firstname'];
	$sn = $row['surname'];
	$email = $row['email'];
	$ph = $row['phone'];
	$dob = $row['dateofbirth'];
	
	echo "$fn, $sn, $email, $ph, $dob<br>";
}





mysqli_close($con);



?>