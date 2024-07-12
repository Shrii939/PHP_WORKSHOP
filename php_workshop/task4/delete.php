<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $id = $_POST['id'];

    // Database connection code comes here
    $conn = new mysqli('localhost', 'root', '', 'wshop');
    // Check for connection error code comes here
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    // SQL delete statement code comes here
    $sql = "DELETE FROM students WHERE id='$id'";
    // Execute the SQL statement and check for success code comes here
    if ($conn->query($sql) === TRUE) {
        echo "Record deleted successfully";
    } else {
        echo "Error deleting record: " . $conn->error;
    }

    // Close the database connection code comes here
    // Redirect to view_details.php code comes here
    // header("Location: view_details.php"); // Redirect commented out for debugging
}
?>
