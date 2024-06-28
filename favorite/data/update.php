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

// Get form data
$id = $_POST['id'];
$title = $_POST['title'];
$description = $_POST['description'];

// SQL to update data in table
$sql = "UPDATE food_data SET title='$title', description='$description' WHERE id=$id";

if ($conn->query($sql) === TRUE) {
    echo "Record updated successfully";
    header("Location: view_data.php"); // Redirect to view all data page
    exit();
} else {
    echo "Error updating record: " . $conn->error;
}

// Close connection
$conn->close();
?>
