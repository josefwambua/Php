<?php

// Database configuration
$DATABASE_HOST = 'localhost';
$DATABASE_USER = 'root';
$password = '';
$DATABASE_NAME = "registrationform";

// Establish connection
$conn = mysqli_connect($DATABASE_HOST, $DATABASE_USER, $password, $DATABASE_NAME);

// Check for connection errors
if (mysqli_connect_error()) {
    exit('Error connecting to database: ' . mysqli_connect_error());
}

// Validate form data
if (!isset($_POST['username']) || !isset($_POST['password']) || !isset($_POST['email'])) {
    exit('Please fill out all fields.');
}

// Check if any field is empty
if (empty($_POST['username']) || empty($_POST['password']) || empty($_POST['email'])) {
    exit('All fields must be filled out.');
}

// Prepare SELECT statement
if ($stmt = $conn->prepare('SELECT id, password FROM users WHERE username = ?')) {
    $stmt->bind_param('s', $_POST['username']);
    $stmt->execute();
    $stmt->store_result();

    if ($stmt->num_rows > 0) {
        // User already exists
        echo 'Username already exists.';
    } else {
        // Prepare INSERT statement
        if ($stmt = $conn->prepare('INSERT INTO users(username, password, email) VALUES (?, ?, ?)')) {
            $password = password_hash($_POST['password'], PASSWORD_DEFAULT);
            $stmt->bind_param('sss', $_POST['username'], $password, $_POST['email']);
            $stmt->execute();

            echo 'User successfully registered.';
        } else {
            echo 'Error occurred during registration.';
        }

        $stmt->close();
    }
    
} else {
    echo 'Error occurred while checking for existing user or preparing SQL statements.';
}

// Close the database connection
$conn->close();
?>
