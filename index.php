<?php

// Define database connection variables
$servername = "localhost";
$username = "your_username";
$password = "your_password";
$dbname = "inventory";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Insert sample data
$sql = "INSERT INTO products (name, description, quantity, price)
VALUES ('Product 1', 'Description 1', 10, 9.99),
       ('Product 2', 'Description 2', 5, 19.99),
       ('Product 3', 'Description 3', 2, 29.99)";

if ($conn->query($sql) === TRUE) {
    echo "Sample data inserted successfully";
} else {
    echo "Error inserting sample data: " . $conn->error;
}

// Close connection
$conn->close();

?>