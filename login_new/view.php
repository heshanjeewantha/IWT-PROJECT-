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
                        <header>My Profile</header>

                        <form action="update.php" method="post">

                            <input type="hidden" name="id" value="'. $row['id'] .'" readonly>
                            <div class="field input">
                                <label for="Username">Username</label>
                                <input type="text" name="name" placeholder="Name" value="'. $row['name'] .'" readonly>
                            </div>
                            <div class="field input">
                                <label for="Age">Age</label>
                                <input type="number" name="age" placeholder="age"  value="'. $row['age'].'" readonly>
                            </div>
                            <div class="field input">
                                <label for="Email">Email</label>
                                <input type="text" name="email" placeholder="Email"  value="'. $row['email'].'" readonly>
                            </div>
                            <div class="field input">
                            <label for="Password">Password</label>
                                <input type="password" name="password" placeholder="Password"  value="'. $row['pass'].'" readonly>
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


<script>
    function updateProfile() {
        document.getElementById("updateForm").submit();
    }

    function goBack() {
        window.history.back();
    }
</script>