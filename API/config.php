<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "food_ordering_system";

// $servername = "localhost";
// $username = "u241276833_gms";
// $password = "Gms@12334";
// $dbname = "u241276833_gms";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 
?>