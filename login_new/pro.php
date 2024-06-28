<?php
    session_start();

    include_once("connection.php");

    if(isset($_SESSION["user_id"])) {
        $user_id = $_SESSION["user_id"];

        $sql = "SELECT * FROM users WHERE id = $user_id";
        $result = mysqli_query($conn, $sql);

        if($row = mysqli_fetch_assoc($result)) {

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User Details</title>
    <link rel="stylesheet" href="../css/register.css">
</head>
<body>
        <div class="navMain">
            <div class="navigation">
                <div class="navlogo">
                    <img id="cLogo" src="../img/logo.png" alt="">
                    <h1>FLAVOR FORGE</h1>
                    <div class="proLogOut">
                        <img id="pLogo" src="../img/profile.png" alt="">
                        <a href="interface.html">Log out</a>
                    </div>
                </div>
                <div class="navBar">
                    <ul>
                        <li><a href="../home.html">Home</a></li>
                        <li><a href="../donation/donation_index.php">Donation</a></li>
                        <li><a href="../contact_us/faq_index.php">Contact Us</a></li>
                        <li><a href="../feedback/index.php">Add Feedback</a></li>
                        <li><a href="../login_new/pro.php">My Profile</a></li>
                        <li><a href="#">popular Section</a></li>
                        <li><a href="../favorite/data/view_data.php">Favorite</a></li>
                        <li><a href="../Add_Recipe_my/Add Recipe.php">Add Recipe</a></li>
                    </ul>
                </div>
            </div>
        </div>

    <div class="row">
        <div class="smallside">
            <div class="myimg" style="height:200px;width:200px"></div><br>
            <div class="p1">
                <a href="view.php?id='<?php echo $row['id']; ?>'" ><?php echo $row['name']; ?></a><br><br>
                <a id="p1-edit" href="update.php?id='<?php echo $row['id']; ?>'" onclick="return confirmEdit()">Edit Profile</a>
                <a id="p1-delete" href="delete.php?id='<?php echo $row['id']; ?>'" onclick="return confirmDelete()">Delete</a>
            </div>
    <p>Some text about me in culpa qui officia deserunt mollit anim..</p>
    <h3>More Text</h3>
    <p>Lorem ipsum dolor sit ame.</p>
    <div class="recipeimg" style="height:60px;">Image</div><br>
    <div class="recipeimg" style="height:60px;">Image</div><br>
    <div class="recipeimg" style="height:60px;">Image</div>
  </div>
  <div class="largeside">
    <h2>MY RECIPES</h2>
    <a id="view_recipe" href="../Add_Recipe_my/recipe_page.php">View Recipe</a>
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

<?php
        } else {
            echo "User details not found.";
        }
    } else {
        header("Location: login.php");
        exit(); 
    }
?>

<script>
    function confirmEdit() {
        return confirm('Are you sure you want to edit your profile?');
    }

    function confirmDelete() {
        return confirm('Are you sure you want to delete your profile?');
    }
</script>
