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

// Get ID of the record to be deleted
$id = $_GET['id'];

// SQL to delete data from table
$sql = "DELETE FROM food_data WHERE id=$id";

if ($conn->query($sql) === TRUE) {
    echo "Record deleted successfully";
    header("Location: view_data.php"); // Redirect to view all data page
    exit();
} else {
    echo "Error deleting record: " . $conn->error;
}

// Close connection
$conn->close();
?>
