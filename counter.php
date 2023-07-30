<?php
    // Fill in your database details
    $servername = "localhost";
    $username = "username";
    $password = "password";
    $database = "database";

    // Create connection
    $conn = new mysqli($servername, $username, $password, $database);

    // Check connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    // Define the query to select the count from the visits table
    $query = "SELECT count FROM visits WHERE id = 1";

    // Execute the query
    $result = $conn->query($query);

    // Check if the query was successful
    if ($result->num_rows > 0) {
        // Fetch the count from the result
        $row = $result->fetch_assoc();
        $count = $row['count'];

        // Increase the count by 1
        $count++;

        // Update the count in the database
        $query = "UPDATE visits SET count = $count WHERE id = 1";
        $conn->query($query);
    } else {
        // Insert a new row with count 1 if there's no row in the visits table
        $count = 1;
        $query = "INSERT INTO visits (id, count) VALUES (1, $count)";
        $conn->query($query);
    }

    // Close the connection
    $conn->close();

    // Return the count
    return $count;
?>
