<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "xyz";
$conn = new mysqli($servername, $username, $password, $dbname);
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
$sql = "CREATE TABLE students (
    id INT UNSIGNED AUTO_INCREMENT PRIMARY KEY,
    first_name VARCHAR(15) NOT NULL,
    last_name VARCHAR(15) NOT NULL,
    class VARCHAR(2) NOT NULL,
    roll_number INT NOT NULL,
    age INT(2) NOT NULL,
    address TEXT
)";
if ($conn->query($sql) === TRUE) {
    echo "Table 'students' created successfully in the '$dbname' database.";
} else {
    echo "Error creating table: " . $conn->error;
}
$conn->close();
?>
