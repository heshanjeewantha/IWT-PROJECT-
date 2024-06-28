<?php
    // $conn = new mysqli("localhost", "root", "","athal1");

    $dbServer = "localhost";
    $dbUser = "root";
    $dbPassword = "";
    $dbName = "athal1";

   $conn = mysqli_connect($dbServer, $dbUser, $dbPassword, $dbName);

    if($conn->connect_error){
        die("connection error". $conn->connect_error);
    }

?>