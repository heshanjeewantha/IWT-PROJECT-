<?php

require 'faq_connection.php';

$Qemail=$_POST["email"];

$sql="DELETE FROM faq WHERE Q_EMAIL='$Qemail';";

if($con->query($sql))
{

    header("Location:faq_read.php");
    exit();
   
}
else
{
    echo "Not success!!";
}

$con->close();
?>