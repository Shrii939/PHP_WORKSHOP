<?php
session_start();
?>

<!DOCTYPE html>
<html>
<head>
    <title>View Details</title>
</head>
<body>
    <h2>View Details</h2>

    <!-- Display Records -->
    <table border="1">
        <tr>
            <th>Name</th>
            <th>USN</th>
            <th>Phone Number</th>
        </tr>

        <?php
        // Database connection code comes here
        // Check for connection error code comes here

        $search_query = "";
        if (isset($_GET['query'])) {
            $search_query = $_GET['query'];
        }
            

        // SQL select statement code comes here
        // Execute the SQL statement and check for results code comes here

        // Fetch and display records code comes here
        // Display "No records found" if no results code comes here
        
        // Close the database connection code comes here
        ?>
    </table>
</body>
</html>
