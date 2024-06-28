
<?php
session_start();
    include_once("connection.php");

    $sql = "SELECT * FROM users ";

    $result = mysqli_query($conn, $sql);


?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="css/register.css">
</head>
<body>
<div class="tableData">
        <table border = "1" >
           <tr>
                <td>id</td>
                <td>name</td>
                <td>lastname</td>
                <td>email</td>
           </tr>
           <?php
                include_once('connection.php');

                $sql = "SELECT * FROM users";
                $result = mysqli_query($conn, $sql);

                while($row = mysqli_fetch_assoc($result)){
                    if($_SESSION['user_id'] === $row['id']){
                    echo      '<tr>';
                    echo      '<td>'. $row['id']. '</td>';
                    echo      '<td>'. $row['name']. '</td>';
                    echo      '<td>'. $row['age']. '</td>';
                    echo      '<td>'. $row['email']. '</td>';
                    echo    '<td> 
                                <a href="edit_profile.php?id=' . $row['id'] . '">update</a> | 
                                <a href="delete.php?id=' . $row['id'] . '">delete</a>
                            </td>';
                    echo      '</tr>';
                    }
                }
           ?>
        </table>
    </div>



</body>
</html>