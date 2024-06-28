<?php

   

    error_reporting(E_ALL);
    ini_set('display_error', 1);

    include_once("connection.php");

    if(isset($_POST['signUP_button'])){

        $name = $_POST['name'];
        $age = $_POST['age'];
        $email = $_POST['email'];
        $password = $_POST['password'];
        $confiPassword = $_POST['confiPassword'];

        $sql = "INSERT INTO users(id, name, age, email, pass) VALUES (0, '$name','$age', '$email', '$password')";

        $result = mysqli_query($conn, $sql);

        if($result){

            header('Location: login.php');
           
        }
        else{

            die(mysqli_error($conn));
           
        }

    }


?>