<?php
$servername = "ap-cdbr-azure-east-c.cloudapp.net";
$username = "b491eddecda076";
$password = "84079bbd";

// Create connection
$conn = new mysqli($servername, $username, $password);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 
echo "Connected successfully";
?>