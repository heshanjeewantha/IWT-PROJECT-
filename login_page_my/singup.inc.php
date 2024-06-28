<?php

session_start();

error_reporting(E_ALL);
ini_set('display_error', 1);

include_once("connection.php");

if (isset($_POST['signUP_button'])) {

    $name = $_POST['name'];
    $age = $_POST['age'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $confiPassword = $_POST['confiPassword'];

    $sql = "INSERT INTO users(id, name, age, email, pass) VALUES (0, '$name','$age', '$email', '$password')";

    $result = mysqli_query($conn, $sql);

    if ($result) {
        
        if (mysqli_affected_rows($conn) > 0) {
            
            $id = mysqli_insert_id($conn);
            $sql = "SELECT * FROM users WHERE id = $id";
            $result = mysqli_query($conn, $sql);

            if ($result && mysqli_num_rows($result) == 1) {
                $user = mysqli_fetch_assoc($result);
                $_SESSION['id'] = $user['id'];
                $_SESSION['email'] = $user['email'];
                $_SESSION['name'] = $user['name'];
                $_SESSION['age'] = $user['age'];
                $_SESSION['pass'] = $user['pass'];
                header('Location: nlogin.php');
                exit;
            } else {
                echo "Error retrieving user details!";
            }
        } else {
            echo "No rows were affected!";
        }
    } else {
        
        echo "Error: " . mysqli_error($conn);
    }
}
?>
