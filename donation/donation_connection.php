<?php
$servername="localhost";
$username="root";
$password="";
$database="athal1";

//creat connection
 $con=new mysqli($servername,$username,$password,$database);

 if($con->connect_error)
 {
    die("Connection Faild!".$con->connect_error);

 }
 else{
    
 }


?>