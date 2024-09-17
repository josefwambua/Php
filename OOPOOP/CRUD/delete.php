<?php
include 'config.php';

if (isset($_GET['id'])) {
    // getting user by id
    $user_id = $_GET['id'];

    // deleting from the database
    $sql = "DELETE FROM users WHERE id='$user_id'";
    $result = $conn->query($sql);
 // outcome whether true or false
    if ($result === TRUE) {
        echo "User deleted successfully";
    } else {
        echo "ERROR: " . $sql . "<br>" . $conn->error;
    }
}

