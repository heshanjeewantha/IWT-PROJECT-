<?php

require 'faq_connection.php';

$Q_Name=$_POST["name"];
$Q_Email=$_POST["email"];
$Q_Message=$_POST["message"];


$sql="UPDATE faq SET Q_NAME='$Q_Name',Q_EMAIL='$Q_Email',Q_MESSAGE='$Q_Message' WHERE Q_EMAIL='$Q_Email';";

if($con->query($sql))
{
    header("Location:faq_read.php");
    exit();
}
else
{
    echo "Not Updated!!";
}


$con->close();
?>