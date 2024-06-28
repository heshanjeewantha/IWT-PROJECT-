<?php
require 'faq_connection.php';

$Q_name=$_POST["name"];
$Q_email=$_POST["email"];
$Q_message=$_POST["message"];

$sql="INSERT INTO faq VALUES('','$Q_name','$Q_email','$Q_message')";

if($con->query($sql))
{
    header("Location:faq_index.php");
    exit();
}
else
{
    echo "Error".$con->error;
}

$con->close();
?>