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

// Select all products
$sql = "SELECT * FROM products";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // Output data of each row
    while($row = $result->fetch_assoc()) {
        echo "ID: " . $row["id"]. " - Name: " . $row["name"]. " - Description: " . $row["description"]. " - Quantity: " . $row["quantity"]. " - Price: $" . $row["price"]. "<br>";
    }
} else {
    echo "0 results";
}

// Close connection
$conn->close();

?>
