<?php
$fname = $_POST['fname'];
$sname = $_POST['sname'];
$email = $_POST['email'];
$ph = $_POST['ph'];
$dob = $_POST['dob'];

include("dbcon.php");

$sql = "insert into customers(firstname,surname,email,phone,dateofbirth)
values ('$fname','$sname','$email','$ph','$dob')";
   

mysqli_query($con,$sql);
mysqli_close($con);
echo "Customer Inserted Into Database";


?>