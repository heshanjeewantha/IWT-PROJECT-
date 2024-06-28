<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="./signup.css">
</head>
<body>
    <!-- <h1>update user details</h1> -->

    <?php

    include_once("connection.php");
        if($_SERVER['REQUEST_METHOD'] === 'GET' && isset($_GET['id'])){
            $id = $_GET['id'];

            $sql = "SELECT * FROM tycrudetable WHERE id = $id";
            $result = mysqli_query($conn, $sql);
            $row = mysqli_fetch_assoc($result);

            if($row){
                echo '<div class="form">
                        <div class="title">
                            <p>Sign Up Form</p>
                        </div>
                        <form action="update.php" method="post">
                            <input type="hidden" name="id" value="'. $row['id'] .'" required>
                            <input type="text" name="name" placeholder="Name" value="'. $row['name'] .'" required>
                            <input type="text" name="lastName" placeholder="last Name"  value="'. $row['lastName'].'" required>
                            <input type="text" name="email" placeholder="Email"  value="'. $row['email'].'" required>
                            <input type="text" name="password" placeholder="Password"  value="'. $row['pass'].'" required>
                           
                            <input type="submit" name="signUP_button" value="Update">
                        </form>
                    </div>';
            }
        }

    ?>
</body>
</html>

<?php
    include_once('connection.php');
    
    if(isset($_POST['signUP_button'])){
        $id = $_POST['id'];
        $name = $_POST['name'];
        $lastName = $_POST['lastName'];
        $email  = $_POST['email'];
        $pass = $_POST['Password'];

        $sql = "UPDATE tycrudetable SET name='$name', lastName='$lastName', email='$email', pass='$pass' WHERE id=$id";
        $result = mysqli_query($conn, $sql);
        echo "kanishka";
        if($result){
            header('location: table.php');
        }
    }


?>