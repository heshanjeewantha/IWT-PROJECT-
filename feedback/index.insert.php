<?php
    session_start();
    require 'config.php';
    
    if(isset($_POST['submit'])){
        $user_id = $_SESSION['user_id'];
        $name = $_POST['name'];
        $email = $_POST['email'];
        $comm = $_POST['comment'];

        if(empty($name) || empty($comm)){
            echo    "<script>
                    alert('all are required');
                    window.location.href='index.php';
                </script>";
                
                
        }
        else{

            $sql = "INSERT INTO feedback (name,email, comments, user_id) VALUES ('$name','$email', '$comm' , '$user_id')";

            


            if($conn->query($sql)){
                header('location: index.php');
                
            }else{
                die("connection error".$conn->connect_error);
            }
        }
    }

?>