<?php
$servername = "localhost";
$username = "root";
$password = "";
$conn = new mysqli($servername, $username, $password);
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
$sql = "CREATE DATABASE xyz";
if ($conn->query($sql) === TRUE) {
    echo "Database 'xyz' created successfully.";
} else {
    echo "Error creating database: " . $conn->error;
}

$conn->close();
?>
