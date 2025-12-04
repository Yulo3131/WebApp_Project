<?php
// 1. Get these exact values from your InfinityFree Panel > MySQL Databases
$host = "sqlXXX.infinityfree.com";  // Example: sql300.infinityfree.com
$user = "if0_40597130";              // Example: if0_36755452
$pass = "TvFMUR895d4x6 ";       // Your main account password (found in Client Area)
$db   = "if0_40597130_ginger_rental"; // Example: if0_36755452_ginger_rental

// 2. Connect to the database
$conn = new mysqli($host, $user, $pass, $db);

// 3. Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>