<?php

    $dbServer = "localhost";
    $dbUser = "root";
    $dbPassword = "";
    $dbName = "athal1";

   $conn = mysqli_connect($dbServer, $dbUser, $dbPassword, $dbName);

    if(!$conn){
        die("connection Failed!". mysqli_connect_errno());
    }

?>