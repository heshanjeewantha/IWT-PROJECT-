<?php
    // Start the session
    session_start();

    include_once("config.php");

    // Check if the user is logged in
    if(isset($_SESSION["user_id"])) {
        $user_id = $_SESSION["user_id"];

        // Fetch details of the logged-in user
        $sql = "SELECT * FROM users WHERE id = $user_id";
        $result = mysqli_query($conn, $sql);

        // Check if user details are found
        if($row = mysqli_fetch_assoc($result)) {
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css" integrity="sha512-SnH5WK+bZxgPHs44uWIX+LLJAJ9/2PkPKZ5QiAj6Ta86w+fsb2TkcmfRyVX3pBnMFcV7oQPJkl9QevSCWr3W6A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="../css/index.css">

    
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
                        <li><a href="index.php">Add Feedback</a></li>
                        <li><a href="../login_new/pro.php">My Profile</a></li>
                        <li><a href="#">popular Section</a></li>
                        <li><a href="data/view_data.php">Favorite</a></li>
                        <li><a href="../Add_Recipe_my/Add Recipe.php">Add Recipe</a></li>
                </ul>
            </div>
        </div>
    </div>

    <div class="main">
        <div class="company">
            <div class="company-logo">
                <a href="#"><img src="../img/logo.png" alt=""></a>
            </div>
            <h2>Your Feedback</h2>
        </div>

        <span id="line"></span>

        <div class="face">
            <a href="#" onclick="feedbackClick('face1')" ><i class="fa-regular fa-face-frown"></i></a>
            <a href="#" onclick="feedbackClick('face2')" ><i class="fa-regular fa-face-meh"></i></a>
            <a href="#" onclick="feedbackClick('face3')" ><i class="fa-regular fa-face-smile-beam"></i></a>
            <a href="#" onclick="feedbackClick('face4')"><i class="fa-regular fa-face-grin-wide"></i></a>
            <a href="#" onclick="feedbackClick('face5')"><i  class="fa-regular fa-face-grin-hearts"></i></a>
        </div>

        <span id="line"></span>

        <div class="keyword">
            <div class="key-box">
                <div class="face-box" id="box1">
                    <div class="keys" >
                        <a href="#" onclick="keywords('f1-not-work')" id="f1-not-work"><p> Did not work</p></a>
                    </div>
                    <div class="keys">
                        <a href="#" onclick="keywords('f1-missing-steps')" id="f1-missing-steps"><p>Missing steps</p></a>
                    </div>
                    <div class="keys">
                        <a href="#" id="f1-missing-ingredients" onclick="keywords('f1-missing-ingredients')"><p>Missing ingredients</p></a>
                    </div>
                </div>
                <div class="face-box" id="box2">
                    <div class="keys">
                        <a href="#" id="f2-confusing-direction" onclick="keywords('f2-confusing-direction')"><p>Confusing direction</p></a>
                    </div>
                    <div class="keys">
                        <a href="#" id="f2-needs-improvement" onclick="keywords('f2-needs-improvement')"><p>Needs improvement</p></a>
                    </div>
                </div>
                <div class="face-box" id="box3">
                    <div class="keys">
                        <a href="#" id="f2-missing-something" onclick="keywords('f2-missing-something')"><p>Missing something</p></a>
                    </div>
                    <div class="keys">
                        <a href="#" id="f2-too-difficult" onclick="keywords('f2-too-difficult')"><p>Too difficult</p></a>
                    </div>
                </div>
                <div class="face-box" id="box4">
                    <div class="keys">
                        <a href="#" id="f2-ok" onclick="keywords('f2-ok')"><p>Ok with tweaks</p></a>
                    </div>
                    <div class="keys">
                        <a href="#" id="f2-needs-flavor" onclick="keywords('f2-needs-flavor')"><p>Needs more flavor</p></a>
                    </div>
                </div>
                <div class="face-box" id="box5">
                    <div class="keys">
                        <a href="#" id="f2-keeper" onclick="keywords('f2-keeper')"><p>A keeper!</p></a>
                    </div>
                    <div class="keys">
                        <a href="#" id="f2-great-flavor" onclick="keywords('f2-great-flavor')"><p>Great flavors</p></a>
                    </div>
                </div>
            </div>
        </div>

        <span id="line"></span>

        <div class="comment_section">
            <form id="form" action="index.insert.php" method="POST" onsubmit="return update()">
                
                <input id="name" type="text" name="name"  placeholder="Enter name" value=" <?php echo $row['name'] ?> " readonly><br><br>
                <input id="email" type="text" name="email"  placeholder="Enter email" value=" <?php echo $row['email'] ?> " readonly><br><br>
                <textarea id="comment" cols="35" rows="10"  type="text" name="comment" placeholder="Enter Feedback"></textarea><br>
                <div class="btn"> 
                     <button id="reset" type="reset" onclick="resetbutton()">Reset</button><button id="submit" type="submit" name="submit" onclick="submitButton()">Submit</button>
                </div>
            </form>
        </div>
<?php } } ?>
    </div>
        <?php

            require 'config.php';

                $sql = "SELECT * FROM feedback";

                $result = $conn->query($sql);

                if($result-> num_rows > 0){
                    echo "<div class='box'>";
                while($row = $result->fetch_assoc()){

                    echo   "<div class='comment-box'>";
                    echo    "<div class='name-box'>";
                    echo        "<span id='comm_name'>".$row['name']."</span>" ;
                    echo        "<span id='comm_email'>".$row['email']."</span>";
                    echo    "</div>";
                    echo    "<p> " . $row['comments']. "</p>";
                    echo     '<div class="logo">
                                <div>';
                                    if($_SESSION['user_id'] == $row['user_id']){
                                        echo    '<a id="edit"  href="update.php? id=' . $row['id'] . '" onclick="confirmEdit()" ><i class="fa-solid fa-pen-to-square"></i></a>';
                                        echo    '<a id="delete" href="delete.php? id=' . $row['id'] . '" onclick=" confirmDelete()" ><i class="fa-solid fa-trash"></i></a>';
                                    }
                    echo        '</div>';
                    echo    '</div>';
                    echo  "</div>";
                   
                }
                echo "</div>";
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

        <script src="../java Script/javaScript.js"></script>
        <script>
            function update() {
                alert("upload successful");
            }
            function resetbutton(){
                if (confirm("Do you want to reset ?")) {
                    return true;
                }
                else {
                    return false;
                }
            }
            function submitButton(){
                if(confirm("Do you want to submit feedback ?")){
                    return true;
                }
                else{
                    return false;
                }
            }
            function confirmDelete(){
                if(confirm("Do you want to delete feedback ?")){
                    return true;
                }
                else{
                    return false;
                }
            }
            function confirmEdit(){
                if(confirm("Do you want to Edit feedback ?")){
                    return true;
                }
                else{
                    return false;
                }
            }
        </script>
</body>
</html>