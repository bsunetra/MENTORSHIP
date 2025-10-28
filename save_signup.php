<?php
$servername = "localhost";
$username = "root";       // your MySQL username
$password = "";           // your MySQL password (often blank in XAMPP)
$dbname = "internship_finder";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Get form data
$name = $_POST['name'];
$age = $_POST['age'];
$dob = $_POST['dob'];
$email = $_POST['email'];
$gender = $_POST['gender'];
$phone = $_POST['phone'];
$field = $_POST['field_of_study'];
$college = $_POST['college'];

// Insert into database
$sql = "INSERT INTO users (name, age, dob, email, gender, phone, field_of_study, college)
        VALUES ('$name', '$age', '$dob', '$email', '$gender', '$phone', '$field', '$college')";

if ($conn->query($sql) === TRUE) {
    echo "<h1>Signup successful!</h1>";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>