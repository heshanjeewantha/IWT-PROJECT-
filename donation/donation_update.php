<?php

require 'donation_connection.php';
$id = $_POST['D_ID'];
$D_fName=$_POST["firstName"];
$D_lName=$_POST["lastName"];
$D_email=$_POST["email"];
$D_mobileNumber=$_POST["mobileNumber"];
$D_greeting=$_POST["greeting"];
$D_feedback=$_POST["feedback"];


$sql="UPDATE donation SET D_FNAME='$D_fName',D_LNAME='$D_lName',D_MOBILE='$D_mobileNumber',GREETING='$D_greeting',FEEDBACK='$D_feedback' WHERE D_EMAIL='$D_email'; ";

if($con->query($sql))
{
   
    header("Location:donation_read.php");
    exit();
    
}
else
{
    echo "Not Updated!!";

}

$con->close();
?>