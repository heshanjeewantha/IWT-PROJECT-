<!DOCTYPE html>
<html>
<head>
    <title>View All Data</title>
    <link rel="stylesheet" href="h&f.css">

    <style>
         body {
            font-family: Arial, sans-serif;
        }

        h2 {
            margin-bottom: 20px;
        }

        table {
            width: 100%;
            border-collapse: collapse;
        }

        th, td {
            border: 1px solid #dddddd;
            padding: 8px;
            text-align: left;
        }

        th {
            background-color: #f2f2f2;
        }

        tr:nth-child(even) {
            background-color: #f9f9f9;
        }

        a {
            color: blue;
            text-decoration: none;
        }

        a:hover {
            text-decoration: underline;
        }
    </style>
</head>
<body>
<div class="navMain">
        <div class="navigation">
            <div class="navlogo">
                <img id="cLogo" src="../../img/logo.png" alt="">
                <h1>FLAVOR FORGE</h1>
                <div class="proLogOut">
                    <img id="pLogo" src="../../img/profile.png" alt="">
                    <a href="login_page_my/logout.php">Log out</a>
                </div>
            </div>
            <div class="navBar">
                <ul>
                    <li><a href="../../home.html">Home</a></li>
                    <li><a href="donation_index.php">Donation</a></li>
                    <li><a href="../../contact_us/faq_index.php">Contact Us</a></li>
                    <li><a href="../../feedback/index.php">Add Feedback</a></li>
                    <li><a href="../../login_page_my/profile.php">My Profile</a></li>
                    <li><a href="../../login_page_my/my_profile.php">popular Section</a></li>
                    <li><a href="../../favorite/data/view_data.php">Favorite</a></li>
                    <li><a href="../../Add_Recipe_my/Add Recipe.php">Add Recipe</a></li>
                </ul>
            </div>
        </div>
    </div>

<h2>Food Data</h2>

<table border="1">
    <tr>
        <th>ID</th>
        <th>Title</th>
        <th>Description</th>
        <th>Action</th>
    </tr>

    <?php
    // Database connection
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "athal1";

    // Create connection
    $conn = new mysqli($servername, $username, $password, $dbname);

    // Check connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    // SQL to retrieve all data from table
    $sql = "SELECT * FROM food_data";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        // Output data of each row
        while($row = $result->fetch_assoc()) {
            echo "<tr>";
            echo "<td>" . $row["id"] . "</td>";
            echo "<td>" . $row["title"] . "</td>";
            echo "<td>" . $row["description"] . "</td>";
            echo "<td>";
            echo "<a href='edit-data.php?id=" . $row["id"] . "'>Edit</a>";
            echo " | ";
            echo "<a href='delete.php?id=" . $row["id"] . "' onclick=\"return confirm('Are you sure you want to delete this record?')\">Delete</a>";
            echo "</td>";
            echo "</tr>";
        }
    } else {
        echo "<tr><td colspan='4'>0 results</td></tr>";
    }

    // Close connection
    $conn->close();
    ?>

</table>


<a href="insert-data.html">Insert data</a>

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
