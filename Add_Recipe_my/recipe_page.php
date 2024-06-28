<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet"  href="recipe_page.css">
    <title>Recipe Page</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css" integrity="sha512-SnH5WK+bZxgPHs44uWIX+LLJAJ9/2PkPKZ5QiAj6Ta86w+fsb2TkcmfRyVX3pBnMFcV7oQPJkl9QevSCWr3W6A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
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
                    <li><a href="../home.html">Home</a></li>
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


<?php
    require 'config.php';
    
    $sql = "SELECT * FROM my_recipes";

                $result = $conn->query($sql);
  
                if($result-> num_rows > 0){

     echo '<div class="detail">';
        
        $row = $result->fetch_assoc();

        while($row = $result->fetch_assoc()){
            echo    '<div class="fieldset">
            <div class="recipe_title">';
        echo        "<h1>" . $row['r_title'] ."</h1>";
        echo    '</div>
                 ';
        echo    '<div class="recipe-img">
        <img src="' . $row['image_path'] . '" alt="Item Image" width="700"></td>
                </div>';
        echo    '<div class="container">
                    <div class="owner_name">
                    <h3>User Name</h3>';
            echo    '<p>'. $row['user_name'] .'</p>';
                    
            echo    '</div>';
            echo    '<div class="recipe_date">
                        <h3>Published Date</h3>';
                echo    '<p>'. $row['r_date'] .'</p>';
                echo '</div>
                    <div class="recipe_time">
                        <h3>Preparation Time</h3>';
            echo        '<p>'. $row['r_time'] .'</p>';
            echo    '</div>
                    </div>
                        <div class="recipe_info">
                        <h3>How to make</h3>';
            echo        '<p>'. $row['description'] .'</p>';
        echo        '</div>';
        echo     '<div class="logo">
                                <a id="edit" href="update.php? id=' . $row['id'] . '"><i class="fa-solid fa-pen-to-square"></i></a>
                                <a id="delete" href="delete.php? id=' . $row['id'] . '" onclick=" confirmDelete()" ><i class="fa-solid fa-trash"></i></a>
                            </div>
        </div>';
    
        }}
        echo '</div> ';
?>

<footer>
            <div class="container1">
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