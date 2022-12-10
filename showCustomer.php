<?php


include("dbcon.php");

$sql = "select * from customers";
   

mysqli_query($con,$sql);
mysqli_close($con);
echo "Customer Inserted Into Data";


?>