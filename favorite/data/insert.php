<?php
// Database connection
$servername = "localhost"; // Change this if your database is hosted elsewhere
$username = "root"; // Your database username
$password = ""; // Your database password
$dbname = "athal1"; // Your database name

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Get form data
$title = $_POST['title'];
$description = $_POST['description'];

// SQL to insert data into table
$sql = "INSERT INTO food_data (title, description) VALUES ('$title', '$description')";

if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
    header("Location: insert-data.html");
    exit();
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

// Close connection
$conn->close();
?>
