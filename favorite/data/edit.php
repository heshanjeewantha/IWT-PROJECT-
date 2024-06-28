<!DOCTYPE html>
<html>
<head>
    <title>Edit Data</title>
    <style>
        /* Your CSS styles here... */
    </style>
</head>
<body>

<h2>Edit Data</h2>

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

// Get ID of the record to be edited
$id = $_GET['id'];

// SQL to retrieve data from table based on ID
$sql = "SELECT * FROM food_data WHERE id=$id";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // Output data of the selected row
    $row = $result->fetch_assoc();
    ?>
    <form action="update.php" method="post">
        <input type="hidden" name="id" value="<?php echo $row['id']; ?>">
        <label for="title">Title:</label><br>
        <input type="text" id="title" name="title" value="<?php echo $row['title']; ?>"><br>
        <label for="description">Description:</label><br>
        <textarea id="description" name="description"><?php echo $row['description']; ?></textarea><br><br>
        <input type="submit" value="Update">
    </form>
    <?php
} else {
    echo "0 results";
}
// Close connection
$conn->close();
?>

</body>
</html>
