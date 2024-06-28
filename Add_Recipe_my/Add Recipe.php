<?php
// Include your database connection file (e.g., dbh.php)
include 'config.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Validate and sanitize user inputs
    $owner_name = mysqli_real_escape_string($conn, $_POST['fullname']);
    $date = mysqli_real_escape_string($conn, $_POST['r-date']);
    $title = mysqli_real_escape_string($conn, $_POST['r-title']);
    $preparation_time = mysqli_real_escape_string($conn, $_POST['r-time']);
    $description = mysqli_real_escape_string($conn, $_POST['comment']);


    if(empty($owner_name)|| empty($date) || empty($title) || empty($preparation_time) || empty($description)){
        
        echo '<script>alert("Please fill in all the fields.");</script>';
        echo '<script>window.location.href = "Add Recipe.php";</script>';
        exit;
    }

    // Check if a file was uploaded
    if (isset($_FILES['item_image'])) {
        $file = $_FILES['item_image'];

        // Check if the file is an image
        if (getimagesize($file['tmp_name'])) {
            // Generate a unique filename
            $image_filename = uniqid() . '_' . $file['name'];

            // Define the upload path
            $upload_path = 'uploads/' . $image_filename; // Change 'uploads/' to your desired directory

            // Move the uploaded file to the specified directory
            if (move_uploaded_file($file['tmp_name'], $upload_path)) {
                // Insert the item data into the database
                $insert_query = "INSERT INTO my_recipes (id, user_name, r_date, r_title, r_time, description, image_path) VALUES ('', '$owner_name', '$date', '$title', '$preparation_time', '$description', '$upload_path')";

                if (mysqli_query($conn, $insert_query)) {
                    // Item added successfully
                    header('location: recipe_page.php');
                    exit;
                    
                } else {
                    // Database insertion failed
                    header('Location: error1_page.php'); // Redirect to an error page
                    exit;
                }
            } else {
                // File upload failed
                header('Location: error2_page.php'); // Redirect to an error page
                exit;
            }
        } else {
            // The uploaded file is not an image
            header('Location: error3_page.php'); // Redirect to an error page
            exit;
        }
    }
}
?>



<!DOCTYPE html>
<html>
<head>
    <title>Add Recipe Page</title>
    <!-- <script src="AR.js"></script> -->
    <link rel="stylesheet" type="text/css" href="add_recipe.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css" integrity="sha512-SnH5WK+bZxgPHs44uWIX+LLJAJ9/2PkPKZ5QiAj6Ta86w+fsb2TkcmfRyVX3pBnMFcV7oQPJkl9QevSCWr3W6A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <style>
        table{
            background-color: white;
        }
    </style>

</head>
<body>
<div class="navMain">
        <div class="navigation">
            <div class="navlogo">
                <img id="cLogo" src="logo.png" alt="">
                <h1>FLAVOR FORGE</h1>
                <div class="proLogOut">
                    <img id="pLogo" src="../img/profile.png" alt="">
                    <a href="#">Log out</a>
                </div>
            </div>
            <div class="navBar">
                <ul>
                    <li><a href="recipeMnagement/home.html">Home</a></li>
                    <li><a href="#">Donation</a></li>
                    <li><a href="#">Contact Us</a></li>
                    <li><a href="#">Add Feedback</a></li>
                    <li><a href="#">My Profile</a></li>
                    <li><a href="#">popular Section</a></li>
                    <li><a href="#">Trending Recipe</a></li>
                </ul>
            </div>
        </div>
</div>

    <div class="add-recipe">
        <h1>Add Recipe</h1>
        
        <form action="Add Recipe.php" method="post" enctype="multipart/form-data">

            <div class="inputs">
            <p>Owner Name</p>
            <input type="text" name="fullname" placeholder="Name">
            <p>Date</p>
            <input type="date" name="r-date" placeholder="Today">
            <p>Recipe Title</p>
            <input type="text" name="r-title" placeholder="Title">
            <p>Recipe Preparation Time(minutes)</p>
            <input type="number" name="r-time" placeholder="Time">
            </div>
            <p>Description</p>
            <textarea name="comment" placeholder="Type here"></textarea>
            
            <p>Add picture</p>
            <img src="add image.png" id="up-pic">
            
            
            <input type="file" id="item_image" name="item_image" accept="image/*" required>
                
            
            <button type="submit" name="submit">Upload Recipe</button>

        </form>

    </div>
    <!-- <table border="1">
        <tr>
            <th>id</th>
            <th>name</th>
            <th>date</th>
            <th>title</th>
            <th>time</th>
            <th>comment</th>
            <th>img path</th>
            <th>update</th>
            <th>delete</th>
        </tr> 

     <?php
    require 'config.php';
        $sql = "SELECT * FROM my_recipes";

                $result = $conn->query($sql);

                if($result-> num_rows > 0){
                    echo '<tr>';
                    while($row = $result->fetch_assoc()){

                            
                        echo    "<td>" . $row['id'] . "  </td>";
                        echo    "<td>" . $row['user_name'] . "  </td>";
                        echo    "<td>" . $row['r_date'] . "  </td>";
                        echo    "<td>" . $row['r_title'] . "  </td>";
                        echo    "<td>" . $row['r_time'] . "  </td>";
                        echo    "<td>" . $row['description'] . "  </td>";
                        echo    "<td>" . $row['image_path'] . "  </td>";
                        echo    '<div class="logo">
                                    <td><a id="edit" href="update.php? id=' . $row['id'] . '"><i class="fa-solid fa-pen-to-square"></i></a></td>
                                    <td><a id="delete" href="delete.php? id=' . $row['id'] . '"><i class="fa-solid fa-trash"></i></a></td>
                                </div>';
                        echo '</tr>';
        
                    }
                }

?> 
</table> -->
<footer>
            <div class="container">
                <div class="footer">
                    <div class="footer-content1">
                        <div class="log">
                            <img src="image/logo.png" alt="">
                            <h3>Follow</h3>
                            <a href=""><i class="fa-brands fa-facebook"></i></a>
                            <a href=""><i class="fa-brands fa-instagram"></i></a>
                            <a href=""><i class="fa-brands fa-youtube"></i></a>
                            <a href=""><i class="fa-brands fa-square-twitter"></i></a>
                        </div>
                    </div>
                    <div class="footer-content2">
                        <div class="details">
                            <ul>
                                <a href=""><li>Recipe</li></a>
                                <a href=""><li>About Us</li></a>
                                <a href=""><li>Donation</li></a>
                                <a href=""><li>Contact Us</li></a>
                            </ul>
                        </div>
                    </div>
                    <div class="footer-content3">
                        <div class="PTE">
                            <ul>
                                <a href=""><li>Privacy and Policy</li></a>
                                <a href=""><li>Terms of Use</li></a>
                                <a href=""><li>Editorial Guidelines</li></a>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </footer>
</body>
</html>

<script>
        
    var uploadpic = document.getElementById("up-pic");
    var inputfile = document.getElementById("input-file");

    inputfile.onchange = function()
    {
        uploadpic.src = URL.createObjectURL(inputfile.files[0]);
        alert("Image added successfully!");
    }

    function responseFunction()
    {
       if( confirm("Do you want to upload recipe?"))
       {
        return true;
       }else
       {
        return false;
       }
    }
    

</script>