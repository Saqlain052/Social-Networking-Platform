<?php
$servername = "localhost";
$username = "root"; 
$password = "";      
$database = "linkify";  


$conn = new mysqli($servername, $username, $password, $database, 3307); // Use the custom port


if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>