<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "xyz";
$conn = new mysqli($servername, $username, $password, $dbname);
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
$sql = "UPDATE students SET age = 17 WHERE id IN (2, 5)";
if ($conn->query($sql) === TRUE) {
    echo "Age updated successfully for students with ID 2 and 5.";
} else {
    echo "Error updating age: " . $conn->error;
}
$conn->close();
?>
