<?php

require 'donation_connection.php';

$D_fName=$_POST["firstName"];
$D_lName=$_POST["lastName"];
$D_email=$_POST["email"];
$D_mobileNumber=$_POST["mobileNumber"];
$D_greeting=$_POST["greeting"];
$D_feedback=$_POST["feedback"];
$D_fund=$_POST["fund"];
$D_amount=$_POST["amount"];

$sql="INSERT INTO donation VALUES('','$D_fName','$D_lName','$D_email','$D_mobileNumber','$D_greeting','$D_feedback','$D_fund','$D_amount')";

if($con->query($sql))
{
    
    header("Location:donation_index.php");
    exit();
}
else
{
    echo "Error".$con->error;
}

$con->close();

?>