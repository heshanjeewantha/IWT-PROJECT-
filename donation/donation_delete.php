<?php

require 'donation_connection.php';

$Demail=$_POST["email"];

$sql="DELETE FROM donation WHERE D_EMAIL='$Demail';";

if($con->query($sql))
{

    header("Location:donation_read.php");
    exit();
   
}
else
{
    echo "Not success!!";
}

$con->close();
?>