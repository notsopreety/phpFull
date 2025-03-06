<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "xyz";
$conn = new mysqli($servername, $username, $password, $dbname);
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
$sql = "SELECT id, first_name, last_name, class, roll_number, age, address FROM students";
$result = $conn->query($sql);
if ($result->num_rows > 0) {
    while($row = $result->fetch_assoc()) {
        echo "ID: " . $row["id"] . "<br>";
        echo "First Name: " . $row["first_name"] . "<br>";
        echo "Last Name: " . $row["last_name"] . "<br>";
        echo "Class: " . $row["class"] . "<br>";
        echo "Roll Number: " . $row["roll_number"] . "<br>";
        echo "Age: " . $row["age"] . "<br>";
        echo "Address: " . $row["address"] . "<br><br>";
    }
} else {
    echo "No data found.";
}
$conn->close();
?>
