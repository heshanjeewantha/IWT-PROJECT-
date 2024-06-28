<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../css/register.css">

</head>
<body>
    <!-- <h1>update user details</h1> -->

    <?php

    include_once("connection.php");
        if($_SERVER['REQUEST_METHOD'] === 'GET' && isset($_GET['id'])){
            $id = $_GET['id'];

            $sql = "SELECT * FROM users WHERE id = $id";
            $result = mysqli_query($conn, $sql);
            $row = mysqli_fetch_assoc($result);

            if($row){
                echo    '<div class="box form-box">
                        <header>Edit Profile</header>

                        <form action="update.php" method="post">

                            <input type="hidden" name="id" value="'. $row['id'] .'" required>
                            <div class="field input">
                                <label for="Username">Username</label>
                                <input type="text" name="name" placeholder="Name" value="'. $row['name'] .'" required>
                            </div>
                            <div class="field input">
                                <label for="Age">Age</label>
                                <input type="number" name="age" placeholder="age"  value="'. $row['age'].'" required>
                            </div>
                            <div class="field input">
                                <label for="Email">Email</label>
                                <input type="text" name="email" placeholder="Email"  value="'. $row['email'].'" required>
                            </div>
                            <div class="field input">
                            <label for="Password">Password</label>
                                <input type="password" name="pass" placeholder="Password"  value="'. $row['pass'].'" required0>
                            </div>
                            <div class="field">
                                <input class="btn" type="submit" name="signUP_button" value="Update" window.onclick="updateProfile()">
                            </div>
                            <div class="field">
                                <input class="btn" type="submit" name="back" value="Back" window.onclick="goBack()">
                            </div>
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
        $age = $_POST['age'];
        $email  = $_POST['email'];
        $pass = $_POST['pass'];

        $sql = "UPDATE users SET name='$name', age='$age', email='$email', pass='$pass' WHERE id=$id";
        $result = mysqli_query($conn, $sql);
        
        if($result){
            header('location: pro.php');
        }
    }

    if(isset($_POST['back'])){
        header('location: pro.php');
    }

?>

<script>
    function updateProfile() {
        document.getElementById("updateForm").submit();
    }

    function goBack() {
        window.history.back();
    }
</script>