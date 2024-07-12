<!DOCTYPE html>
<html>
<head>
    <title>Add Details</title>
</head>
<body>
    <h2>Add Details</h2>
    <form action="add_details.php" method="post">
        Name: <input type="text" name="name" required><br>
        USN: <input type="text" name="usn" required><br>
        Phone Number: <input type="text" name="phone" required><br>
        <input type="submit" name="submit" value="Submit">
    </form>

    <?php
    if (isset($_POST['submit'])) {
        $name = $_POST['name'];
        $usn = $_POST['usn'];
        $phone = $_POST['phone'];

        // Database connection code comes here
        // Check for connection error code comes here

        // SQL insert statement code comes here
        // Execute the SQL statement and check for success code comes here

        // Close the database connection code comes here
    }
    ?>
</body>
</html>
