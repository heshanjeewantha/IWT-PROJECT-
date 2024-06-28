<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css" integrity="sha512-SnH5WK+bZxgPHs44uWIX+LLJAJ9/2PkPKZ5QiAj6Ta86w+fsb2TkcmfRyVX3pBnMFcV7oQPJkl9QevSCWr3W6A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="h&f.css">
   

    <style>
  .container {
        display: flex;
        flex-wrap: wrap;
        justify-content: space-between;
        max-width: 1200px; /* Adjust max-width as needed */
        margin: 0 auto; /* Center the container */
        padding: 0 20px; /* Add padding to the sides */
    }

    .row {
        width: 100%; /* Row takes full width */
        margin-bottom: 20px; /* Adjust spacing between rows */
        display: flex;
        justify-content: space-between;
    }

    .text-section {
        width: calc(25% - 10px); /* Adjust width and spacing */
        box-sizing: border-box; /* Include padding and border in width */
        border: 1px solid #ccc; /* Add border for each grid cell */
        padding: 10px;
        margin-bottom: 20px; /* Adjust spacing between grid cells */
        text-align: center; /* Center-align content */
    }

    .text-section img {
        display: block;
        margin: 0 auto;
        max-width: 100%; /* Set max-width to ensure images are responsive */
        height: auto; /* Maintain aspect ratio */
    }

    .icon-container {
        display: flex;
        justify-content: space-around; /* Distribute icons evenly */
    }

    .icon-container img {
        width: 40px; /* Set width for icons */
        height: 40px; /* Set height for icons */
    }

    .middle-p {
        text-align: center;
    }

    @media only screen and (max-width: 768px) {
        .text-section {
            width: calc(50% - 10px); /* Adjust width for smaller screens */
        }
    }

    @media only screen and (max-width: 480px) {
        .text-section {
            width: 100%; /* Display one grid cell per row on smaller screens */
        }
    }
    </style>
</head>
<body>
<div class="navMain">
        <div class="navigation">
            <div class="navlogo">
                <img id="cLogo" src="img/logo.png" alt="">
                <h1>company Name</h1>
                <div class="proLogOut">
                    <img id="pLogo" src="img/profile.png" alt="">
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

    <!-- Header section end here -->

    <h1>Favorite Recipes</h1>

   
    <?php
// Database connection
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "athal1";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// SQL query to fetch data from food_data table
$sql = "SELECT title, description FROM food_data";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    echo '<div class="container">';
    $count = 0;
    while ($row = $result->fetch_assoc()) {
        if ($count % 4 == 0) {
            echo '<div class="row">';
        }
        echo '<div class="text-section">';
        echo '<h2>' . $row["title"] . '</h2>';
        echo '<img src="img/image1.jpg" alt="food" class="image-middle2">';
        echo '<p class="middle-p">' . $row["description"] . '</p>';
        echo '<div class="icon-container">';
        echo '<img src="img/icons/favorite.png" alt="favorite" srcset="">';
        echo '<img src="img/icons/star.png" alt="favorite" srcset="">';
        echo '<img src="img/icons/plus.png" alt="favorite" srcset="">';
        echo '<img src="img/icons/share.png" alt="favorite" srcset="">';
        echo '</div>'; // Close icon-container
        echo '</div>';
        if ($count % 4 == 3) {
            echo '</div>'; // Close the row
        }
        $count++;
    }
    if ($count % 4 != 0) {
        echo '</div>'; // Close the row
    }
    echo '</div>';
} else {
    echo "0 results";
}
$conn->close();
?>

    </div>

    <!-- Footer section start here -->
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
