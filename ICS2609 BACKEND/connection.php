<?php
// papalit nalang ng mga deets sa database mu
$servername = "localhost"; 
$username = "root"; 
$password = ""; 
$dbname = "backendics2609"; 

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
    
?>
