<?php
include "config.php";

// Insert new user data
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $firstname = $_POST['firstname'];
    $lastname = $_POST['lastname'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $gender = $_POST['gender'];

    $sql = "INSERT INTO users (firstname, lastname, email, password, gender) VALUES ('$firstname', '$lastname', '$email', '$password', '$gender')";

    if ($conn->query($sql) == TRUE) {
        echo "New record added successfully";
    } else {
        echo "Error: " . $conn->error;
    }
}

// Display form
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User Registration Form</title>
</head>
<body>
    <form method="post" action="">
        <fieldset>
            <legend>Personal Information:</legend>
            First Name: <br>
            <input type="text" name="firstname" required>
            <br>
            Last Name: <br>
            <input type="text" name="lastname" required>
            <br>
            Email: <br>
            <input type="email" name="email" required>
            <br>
            Password: <br>
            <input type="password" name="password" required>
            <br>
            Gender: <br>
            <input type="radio" name="gender" value="male">Male
            <input type="radio" name="gender" value="female">Female
            <br>
            <br>
            <input type="submit" name="submit" value="Register User">
        </fieldset>
    </form>
</body>
</html>


