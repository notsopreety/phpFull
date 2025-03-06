<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "xyz";
$conn = new mysqli($servername, $username, $password, $dbname);
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
$sql = "DELETE FROM students WHERE id = 4";
if ($conn->query($sql) === TRUE) {
    echo "Student data with ID 4 deleted successfully.";
} else {
    echo "Error deleting data: " . $conn->error;
}
$conn->close();
?>
