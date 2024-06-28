<?php
// Include your database connection script (e.g., dbh.php)
include 'config.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    
    if (isset($_POST['item_id'], $_POST['fullname'], $_POST['r-date'], $_POST['r-title'], $_POST['r-time'], $_POST['comment'])) {
        echo 'jcjnc';

        $item_id = $_POST['item_id'];
        $owner_name = mysqli_real_escape_string($conn, $_POST['fullname']);
        $date = mysqli_real_escape_string($conn, $_POST['r-date']);
        $title = mysqli_real_escape_string($conn, $_POST['r-title']);
        $preparation_time = mysqli_real_escape_string($conn, $_POST['r-time']);
        $description = mysqli_real_escape_string($conn, $_POST['comment']);

        // Check if a new image has been uploaded
        if (isset($_FILES['item_image']) && $_FILES['item_image']['error'] === UPLOAD_ERR_OK) {
            $file = $_FILES['item_image'];

            if (getimagesize($file['tmp_name'])) {
                // Generate a unique filename
                $image_filename = uniqid() . '_' . $file['name'];

                // Define the upload path
                $upload_path = 'uploads/' . $image_filename; // Change 'uploads/' to your desired directory

                // Move the uploaded file to the specified directory
                if (move_uploaded_file($file['tmp_name'], $upload_path)) {
                    // Update the item data with the new image path
                    $update_query = "UPDATE my_recipes SET user_name = '$owner_name ', r_date = '$date', r_title = '$title', r_time = '$preparation_time', description = '$description', image_path = '$upload_path' WHERE id = $item_id";

                    if (mysqli_query($conn, $update_query)) {
                        // Item updated successfully
                        header('location: recipe_page.php');
                     // Redirect to a success page
                        exit;
                    } else {
                        // Database update failed
                        header('Location: update_error.php'); // Redirect to an error page
                        exit;
                    }
                } else {
                    // File upload failed
                    header('Location: update_error.php'); // Redirect to an error page
                    exit;
                }
            } else {
                // The uploaded file is not an image
                header('Location: update_error.php'); // Redirect to an error page
                exit;
            }
        } else {
            
            // No new image uploaded, update other item data
            $update_query = "UPDATE my_recipes SET user_name = '$owner_name ', r_date = '$date', r_title = $title, r_time = '$preparation_time', description = '$description' WHERE id = $item_id";

            if (mysqli_query($conn, $update_query)) {
                // Item updated successfully
                header('location: recipe_page.php'); // Redirect to a success page
                exit;
            } else {
                // Database update failed
                header('Location: update_error.php'); // Redirect to an error page
                exit;
            }
        }
    }
}
?>
