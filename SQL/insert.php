<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "xyz";
$conn = new mysqli($servername, $username, $password, $dbname);
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
$sql = "INSERT INTO students (first_name, last_name, class, roll_number, age, address)
VALUES
    ('Samir', 'Badaila', '12', 37, 18, 'Kalanki, Kathmandu'),
    ('Bibek', 'Singh', '11', 10, 16, 'Kirtipur, Kathmandu'),
    ('Rina', 'Magar', '12', 22, 17, 'Balkhu, Kathmandu'),
    ('Alan', 'Gurung', '12', 18, 18, 'Kirtipur, Kathmandu'),
    ('Riya', 'Shrestha', '11', 12, 16, 'Kalimati, Kathmandu')";
if ($conn->query($sql) === TRUE) {
    echo "Data inserted successfully into the 'students' table.";
} else {
    echo "Error inserting data: " . $conn->error;
}
$conn->close();
?>
