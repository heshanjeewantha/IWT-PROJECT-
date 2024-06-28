<?php
// Include your database connection file (e.g., dbh.php)
include 'config.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Validate and sanitize user inputs
    $owner_name = mysqli_real_escape_string($conn, $_POST['fullname']);
    $date = mysqli_real_escape_string($conn, $_POST['r-date']);
    $title = mysqli_real_escape_string($conn, $_POST['r-title']);
    $preparation_time = mysqli_real_escape_string($conn, $_POST['r-time']);
    $description = mysqli_real_escape_string($conn, $_POST['comment']);

    // Check if a file was uploaded
    if (isset($_FILES['item_image'])) {
        $file = $_FILES['item_image'];

        // Check if the file is an image
        if (getimagesize($file['tmp_name'])) {
            // Generate a unique filename
            $image_filename = uniqid() . '_' . $file['name'];

            // Define the upload path
            $upload_path = 'uploads/' . $image_filename; // Change 'uploads/' to your desired directory

            // Move the uploaded file to the specified directory
            if (move_uploaded_file($file['tmp_name'], $upload_path)) {
                // Insert the item data into the database
                $insert_query = "INSERT INTO my_recipes (id, user_name, r_date, r_title, r_time, description, image_path) VALUES ('', '$owner_name', '$date', '$title', '$preparation_time', '$description', '$upload_path')";

                if (mysqli_query($conn, $insert_query)) {
                    // Item added successfully
                    echo '<script type="text/javascript">
        window.onload = function () { alert("Item Aded !"); 
            window.location.href = "items.php";}
        </script>'; // Redirect to a success page
                    exit;
                } else {
                    // Database insertion failed
                    header('Location: error_page.php'); // Redirect to an error page
                    exit;
                }
            } else {
                // File upload failed
                header('Location: error_page.php'); // Redirect to an error page
                exit;
            }
        } else {
            // The uploaded file is not an image
            header('Location: error_page.php'); // Redirect to an error page
            exit;
        }
    }
}
?>
