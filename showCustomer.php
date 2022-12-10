<?php


include("dbcon.php");

$sql = "select * from customers";
   

$result = mysqli_query($con,$sql);
echo "<TABLE border='1'>";
while($row=mysqli_fetch_assoc($result)) {
	$fn = $row['firstname'];
	$sn = $row['surname'];
	$email = $row['email'];
	$ph = $row['phone'];
	$dob = $row['dateofbirth'];
	
	echo "$fn, $sn, $email, $ph, $dob<br>";
}
echo "</TABLE>";




mysqli_close($con);



?>