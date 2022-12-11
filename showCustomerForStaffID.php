<?php


include("dbcon.php");
$sid = $_GET['staffid'];
$sql = "select * from customers";
   

$result = mysqli_query($con,$sql);
echo "<TABLE border='1'>";
while($row=mysqli_fetch_assoc($result)) {
	$fn = $row['firstname'];
	$sn = $row['surname'];
	$email = $row['email'];
	$ph = $row['phone'];
	$dob = $row['dateofbirth'];
	
	echo "<TR><TD>$fn</TD><TD>$sn</TD><TD>$email</TD><TD>$ph</TD><TD>$dob</TD></TR>";
}
echo "</TABLE>";




mysqli_close($con);



?>