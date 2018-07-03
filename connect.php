<?php
$servername = "localhost";
$user = "root";
$password = "";
$db="template1";
// Create connection
$conn = new mysqli($servername, $user, $password,$db);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 
/*echo "Connected successfully";*/
?>