<?php

include_once("connection.php");

error_reporting(E_ALL);
ini_set('display_error', 1);

if($_SERVER['REQUEST_METHOD'] === 'GET' && isset($_GET['id'])){
    $id = $_GET['id'];


    $delete_feedback_sql = "DELETE FROM feedback WHERE user_id = $id";
    $deleted_feedback = mysqli_query($conn, $delete_feedback_sql);

    if (!$deleted_feedback) {
        echo "Error deleting related feedback!";
        
    }

    $sql = "SELECT * FROM users WHERE id = $id";
    $result = mysqli_query($conn, $sql);
    $details = mysqli_fetch_assoc($result);

    if($details){

        $delete_sql = "DELETE FROM users WHERE id = $id";
        $deleted_id = mysqli_query($conn, $delete_sql);

        if($deleted_id){
            
            header('location: logout.php');
        }
        else{
            echo "delete error !";
        }
    }
}

?>
