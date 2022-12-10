<?php


include("dbcon.php");

$sql = "select * from customers";
   

$result = mysqli_query($con,$sql);





mysqli_close($con);
echo "Customer Inserted Into Data";


?>