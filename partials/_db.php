<?php
// $servername = "localhost";
// $username = "root";
// $password = "";
// $db = "dmit";

$servername = "localhost";
$username = "u133609271_dmit";
$password = "Dmit@12345";
$db = "u133609271_dmit";

// Create connection
$conn = new mysqli($servername, $username, $password,$db);

// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
// echo "Connected successfully";
?>