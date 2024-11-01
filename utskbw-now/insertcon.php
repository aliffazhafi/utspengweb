<?php
// Enable error reporting
error_reporting(E_ALL);
ini_set('display_errors', 1);

// Database configuration
$servername = "localhost"; // your server name
$username = "root"; // your database username
$password = ""; // your database password
$dbname = "utskbw"; // your database name

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    // Return a JSON response
    echo json_encode(['status' => 'error', 'message' => 'Connection failed: ' . $conn->connect_error]);
    exit();
}

// Get the form data and sanitize it
$name = isset($_POST['your_name']) ? $conn->real_escape_string(trim($_POST['your_name'])) : '';
$email = isset($_POST['your_email']) ? $conn->real_escape_string(trim($_POST['your_email'])) : '';
$subjek = isset($_POST['subjek']) ? $conn->real_escape_string(trim($_POST['subjek'])) : '';
$pesan = isset($_POST['pesan']) ? $conn->real_escape_string(trim($_POST['pesan'])) : '';

// Prepare and bind
$stmt = $conn->prepare("INSERT INTO contact (your_name, your_email, subjek, pesan) VALUES VALUES ('$your_name', '$your_email', '$subject', '$message')");
$stmt->bind_param("ssss", $name, $email, $subjek, $pesan);

// Execute the statement
if ($stmt->execute()) {
    // Return a JSON response for success
    echo json_encode(['status' => 'success', 'message' => 'New record created successfully']);
} else {
    // Return a JSON response for error
    echo json_encode(['status' => 'error', 'message' => 'Error: ' . $stmt->error]);
}

// Close the statement and connection
$stmt->close();
$conn->close();
?>
