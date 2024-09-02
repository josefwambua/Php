<?php
session_start();

include "conn.php";

if(isset($_POST['username']) && isset($_POST['password'])) {
    $username = $_POST['username']; // We'll sanitize this when using it in the query
    $password = $_POST['password'];

    // For debugging, log the input (remove in production)
    error_log("Login attempt: Username: $username, Password: $password");

    // Check for empty fields
    if(empty($username) || empty($password)) {
        header("Location: index.php?error=" . urlencode("Please fill in all fields"));
        exit();
    }

    // Prepare SQL query
    $sql = "SELECT * FROM users WHERE username = ?";
    $stmt = mysqli_prepare($conn, $sql);
    if ($stmt === false) {
        error_log("Prepare failed: " . mysqli_error($conn));
        header("Location: index.php?error=" . urlencode("Database error"));
        exit();
    }

    mysqli_stmt_bind_param($stmt, "s", $username);
    if (!mysqli_stmt_execute($stmt)) {
        error_log("Execute failed: " . mysqli_stmt_error($stmt));
        header("Location: index.php?error=" . urlencode("Database error"));
        exit();
    }

    $result = mysqli_stmt_get_result($stmt);

    // Check if user exists
    if ($row = mysqli_fetch_assoc($result)) {
        // For debugging, log the fetched password hash (remove in production)
        error_log("Fetched password hash: " . $row['password']);

        // Verify password
        if (password_verify($password, $row['password'])) {
            // Successful login
            $_SESSION['user_id'] = $row['id'];
            $_SESSION['username'] = $row['username'];
            $_SESSION['name'] = $row['name'];
            
            session_regenerate_id(true);
            
            header("Location: home.php");
            exit();
        } else {
            // Incorrect password
            error_log("Password verification failed for user: $username");
            header("Location: index.php?error=" . urlencode("Invalid username or password"));
            exit();
        }
    } else {
        // User not found
        error_log("User not found: $username");
        header("Location: index.php?error=" . urlencode("Invalid username or password"));
        exit();
    }
} else {
    header("Location: index.php?error=" . urlencode("Invalid request"));
    exit();
}
?>