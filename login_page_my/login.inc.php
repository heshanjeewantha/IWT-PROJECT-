<?php
    session_start();
    include_once("connection.php");

    error_reporting(E_ALL);
    ini_set('display_error', 1);

    if(isset($_POST['login_button'])){

        $email = $_POST['email'];
        $pass = $_POST['password'];

        $sql = "SELECT * FROM  users WHERE email = '{$email}' AND pass = '{$pass}'";

        $showResult = mysqli_query($conn, $sql);

        if($showResult){
            if(mysqli_num_rows($showResult) == 1){

                
                $user = mysqli_fetch_assoc($showResult);
                if($pass === $user['pass']){
                    $_SESSION['id'] = $user['id'];
                    $_SESSION['email'] = $user['email'];
                    $_SESSION['name'] = $user['name'];
                    $_SESSION['age'] = $user['age'];
                    $_SESSION['pass'] = $user['pass'];
                    header('location: ../home.html');  
                }   
                

            }
            else{
                echo "error 1";
            }
        }
        else{
            echo "error 2";
        }
    }
    else{
        echo "error 3";
    }




?>