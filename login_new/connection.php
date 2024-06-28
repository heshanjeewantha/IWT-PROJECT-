<?php

$dbServer = "localhost";
$dbUser = "root";
$dbPassword = ""; // No password as per your PHPMyAdmin configuration
$dbName = "athal1";

$conn = mysqli_connect($dbServer, $dbUser, $dbPassword, $dbName);

if(!$conn){
    die("Connection Failed! " . mysqli_connect_error());
} else {
    echo "Connection Successful!";
}

?>
