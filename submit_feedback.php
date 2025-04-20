<?php
// Set your database connection details here
$host = 'localhost'; // Sesuaikan dengan host database Anda
$username = 'hmsiutyc_kritikuser'; // Sesuaikan dengan username database Anda
$password = 'D#T-GARj)QcR'; // Sesuaikan dengan password database Anda
$database = 'hmsiutyc_kritik';

// Create connection
$conn = new mysqli($host, $username, $password, $database);

// Check connection
if ($conn->connect_error) {
    die('Connection failed: ' . $conn->connect_error);
}

// Get form data
$name = $_POST['name'];
$email = $_POST['email'];
$message = $_POST['message'];

// SQL query to insert data into the feedback_form table
$sql = "INSERT INTO feedback_form (nama, email, pesan) VALUES ('$name', '$email', '$message')";

if ($conn->query($sql) === TRUE) {
    echo 'Feedback submitted successfully';
} else {
    echo 'Error: ' . $sql . '<br>' . $conn->error;
}

// Close connection
$conn->close();
?>
