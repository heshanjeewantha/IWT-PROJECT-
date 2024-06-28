<?php
$servername="localhost";
$username="root";
$password="";
$database="athal1";

//create connection
$con=new mysqli($servername,$username,$password,$database);

if($con->connect_error)
{
    die("Connection faild!".$con->connect_error);
}
else{

    
}



?>