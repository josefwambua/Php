<?php
// config.php file contents
$servername = "localhost";
$username = "root";
$password = "";
$db = "league";

// Create connection
$conn = new mysqli($servername, $username, $password, $db);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Select database
if (!$conn->select_db($db)) {
    die ("Can't use db : " . $conn->error);
}

// We're removing the $conn->close() line from here.
// The connection will be closed when the script finishes or when we explicitly close it.
