<?php
    session_start();
    include 'connection.php';
    if(!isset($_SESSION["user_id"])){
        header("location: nlogin.php");

        exit();
    }

    ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Profile</title>
    <link rel="stylesheet" href="../css/register.css">
</head>
<body>
<?php
include_once('connection.php');
if(isset($_GET['id'])){
$id = $_GET['id'];
$sql = "SELECT * FROM users";
$result = mysqli_query($conn, $sql);
$row = mysqli_fetch_assoc($result);
if($row){
    



    echo'    
            <form action="edit_profile.php" method="post">
            <input type="text" name="id" value="' . $row['id'] . '" required>
                <div class="field input">
                    <label for="Username">Username</label>
                    <input type="text" name="name" id="username" value="'  . $row['name'] . '"  required>
                </div>

                <div class="field input">
                    <label for="Email">Email</label>
                    <input type="text" name="email" id="Email" value="'.  $row['email'] .' "  required>
                </div>

                <div class="field input">
                    <label for="Age">Age</label>
                    <input type="number" name="age" id="Age" value="' . $row['age'] . '"  required>

                </div>
                
                <div class="field">
                    <input type="submit" class="btn" name="update" value="Update" >
                    <a href="delete.php?id="' . $row['id'] . '">Delete</a>
                </div>
                
            </form>
            
        </div>;';
}
 }?>
</body>
</html>

<?php
    include_once('connection.php');
    
    if(isset($_POST['update'])){
        $id = $_POST['id'];
        $name = $_POST['name'];
        $email = $_POST['email'];
        $age  = $_POST['age'];

        $sql = "UPDATE users SET name='$name', email='$email', age='$age' WHERE id=$id";
        $result = mysqli_query($conn, $sql);
        
        if($result){
            header('location: profile.php');
        }
    }

?>