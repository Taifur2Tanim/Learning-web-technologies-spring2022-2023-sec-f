<?php
// Connect to the database
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "product_db";

$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Get form data
$name = isset($_POST["name"]) ? $_POST["name"] : "";
$buying_price = isset($_POST["buying_price"]) ? $_POST["buying_price"] : "";
$selling_price = isset($_POST["selling_price"]) ? $_POST["selling_price"] : "";

// Prepare and execute SQL statement to insert data
$stmt = $conn->prepare("INSERT INTO products (name, buying_price, selling_price) VALUES (?, ?, ?)");
$stmt->bind_param("ssd", $name, $buying_price, $selling_price);
$stmt->execute();

// Check if insert was successful
if ($stmt->affected_rows > 0) {
    echo "Product added successfully!";
} else {
    echo "Error adding product: " . $conn->error;
}

// Close database connection
$stmt->close();
$conn->close();
?>

