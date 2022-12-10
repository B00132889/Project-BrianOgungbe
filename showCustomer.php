<?php


include("dbcon.php");

$sql = "select * from customers";
   

$result = mysqli_query($con,$sql);
while(mysqli_fetch_assoc($result)) {
	$fn = $row['firstname'];
	$fn = $row['surname'];

}





mysqli_close($con);
echo "Customer Inserted Into Data";


?>