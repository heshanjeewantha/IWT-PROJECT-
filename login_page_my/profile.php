<?php
session_start();

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>My Profile</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css" integrity="sha512-SnH5WK+bZxgPHs44uWIX+LLJAJ9/2PkPKZ5QiAj6Ta86w+fsb2TkcmfRyVX3pBnMFcV7oQPJkl9QevSCWr3W6A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="profile.css">
    <link href='https://fonts.googleapis.com/css?family=Aclonica' rel='stylesheet'>
</head>
<body>
<div class="navMain">
        <div class="navigation">
            <div class="navlogo">
                <img id="cLogo" src="../img/logo.png" alt="">
                <div class="header">FLAVOR FORGE</div>
                 <div class="proLogOut">
                    <img id="pLogo" src="../img/profile.png" alt="">
                    <a href="logout.php">Log out</a>
                </div>
            </div>
            <div class="navBar">
                <ul>
                    <li><a href="../home.html">Home</a></li>
                    <li><a href="#">Donation</a></li>
                    <li><a href="#">Contact Us</a></li>
                    <li><a href="../feedback/index.php">Add Feedback</a></li>
                    <li><a href="#">My Profile</a></li>
                    <li><a href="#">popular Section</a></li>
                    <li><a href="#">Trending Recipe</a></li>
                </ul>
            </div>
        </div>
    </div>

</div>

        



<div class="row">
  <div class="smallside">
    <div class="myimg" style="height:200px;width:200px"></div><br>
    <div class="p1"><?php echo $_SESSION["name"] ?><br>
    
  <a href="update.php?id=' . $row['id'] . '">edite profile</a>


    <button class='btn'><a href='edit_profile.php?id=$res_id'>Edit Profile</a></button></div>
    <p>Some text about me in culpa qui officia deserunt mollit anim..</p>
    <h3>More Text</h3>
    <p>Lorem ipsum dolor sit ame.</p>
    <div class="recipeimg" style="height:60px;">Image</div><br>
    <div class="recipeimg" style="height:60px;">Image</div><br>
    <div class="recipeimg" style="height:60px;">Image</div>
  </div>
  <div class="largeside">
    <h2>MY RECIPES</h2>
    <h5>Title description, Dec 7, 2017</h5>
    <div class="recipeimg" style="height:200px;">Image</div>
    <p>Some text..</p>
    <p>Sunt in culpa qui officia deserunt mollit anim id est laborum consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco.</p>
    <br>
    <h2>MY MENUS</h2>
    <h5>Title description, Sep 2, 2017</h5>
    <div class="recipeimg" style="height:200px;">Image</div>
    <p>Some text..</p>
    <p>Sunt in culpa qui officia deserunt mollit anim id est laborum consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco.</p>
  </div>
</div>

 
        

    
          <footer>
            <div class="container2">
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
        <script>
            // Get all the list items (li) within the navBar
const listItems = document.querySelectorAll('.navBar ul li');

// Loop through each list item and scroll it into view
listItems.forEach(item => {
    item.scrollIntoView({ behavior: 'smooth' }); // Smooth scrolling
});

        </script>
</body>
</html>