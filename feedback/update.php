
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css" integrity="sha512-SnH5WK+bZxgPHs44uWIX+LLJAJ9/2PkPKZ5QiAj6Ta86w+fsb2TkcmfRyVX3pBnMFcV7oQPJkl9QevSCWr3W6A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="../css/update.css">

    <style>
        #comment{
            resize:vertical;
        }
    </style>

</head>
<body>
<div class="navMain">
        <div class="navigation">
            <div class="navlogo">
                <img id="cLogo" src="../img/logo.png" alt="">
                <h1>FLAVOR FORGE</h1>
                <div class="proLogOut">
                    <img id="pLogo" src="../img/profile.png" alt="">
                    <a href="#">Log out</a>
                </div>
            </div>
            <div class="navBar">
                <ul>
                <li><a href="../home.html">Home</a></li>
                    <li><a href="../donation/donation_index.php">Donation</a></li>
                    <li><a href="../contact_us/faq_index.php">Contact Us</a></li>
                    <li><a href="../feedback/index.php">Add Feedback</a></li>
                    <li><a href="../login_page_my/profile.php">My Profile</a></li>
                    <li><a href="../login_page_my/my_profile.php">popular Section</a></li>
                    <li><a href="../favorite/data/view_data.php">Favorite</a></li>
                    <li><a href="../Add_Recipe_my/Add Recipe.php">Add Recipe</a></li>
                </ul>
            </div>
        </div>
    </div>
    <?php 

        require 'config.php';
        if(isset($_GET['id'])){
            $id = $_GET['id'];
            $sql = "SELECT * FROM feedback WHERE id = $id";
            $result = $conn->query($sql);
            $row = $result->fetch_assoc();
            if($row)
            {
                echo '<div class="main">
                    <div class="comment_section">
                        <form id="form" action="update.php" method="POST">
                            <div class="commentId">
                            Update Feedback
                            <input hidden id="id" type="text" name="id" value="' . $row['id'] . '" readonly><br><br>
                           </div>
                            <input id="name" type="text" name="name" value="' . $row['name']. '" readonly><br><br>
                            <input id="email" type="text" name="email" value="' . $row['email']. '" readonly><br><br>
                            <textarea id="comment" type="text" name="comment" id="" cols="35" rows="8" placeholder="Enter Feedback" >' . $row['comments'] . '</textarea><br>
                            <div class="btn">
                                <button id="update" type="submit" name="update" onclick="confirmUpdate()">Update</button>
                            </div>
                        </form>
                    </div>
                </div>';
            }
        }
        
    ?>

<footer>
            <div class="container">
                <div class="footer">
                    <div class="footer-content1">
                        <div class="log">
                            <img src="../image/logo.png" alt="">
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
<?php

        require 'config.php';

        if(isset($_POST['update'])){
            $id = $_POST['id'];
            $name = $_POST['name'];
            $comm = $_POST['comment'];
            if(empty($comm)){
                echo    "<script>
                    alert('all are required');
                    window.location.href='index.php';
                </script>";
            }
            else{
                $sql = "UPDATE feedback SET comments='$comm' WHERE id= $id";

                $result = $conn->query($sql);
                
                if($result){
                    echo' <script>
                        confirm("update is ok ?");
                        window.location.href="index.php";
                    </script>';
                }
            }
        }
    ?>

    <script>
        function confirmUpdate(){
            if(confirm("confirm your feedback update ?")){
                    return true;
                }
                else{
                    return false;
                }
        }
    </script>