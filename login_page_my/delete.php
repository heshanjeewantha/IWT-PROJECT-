<?php

include_once("connection.php");

error_reporting(E_ALL);
ini_set('display_error', 1);

if($_SERVER['REQUEST_METHOD'] === 'GET' && isset($_GET['id'])){
    $id = $_GET['id'];

    $sql = "SELECT * FROM users WHERE id = $id";
    $result = mysqli_query($conn, $sql);
    $details = mysqli_fetch_assoc($result);

    if($details){

        $delete_sql = "DELETE FROM users WHERE id = $id";
        $deleted_id = mysqli_query($conn, $delete_sql);

        if($deleted_id){
            header('location: table.php');
        }
        else{
            echo "delete error !";
        }
    }
}

?>
