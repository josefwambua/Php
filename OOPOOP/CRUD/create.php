<?php
// Include database configuration
require_once "config.php";

// Function to safely get POST data
function getPostData($key) {
    return isset($_POST[$key]) ? trim($_POST[$key]) : '';
}

$message = ''; // Variable to store success or error message

// Insert new user data
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Check if the connection is still valid
    if (!$conn || $conn->connect_error) {
        $message = "Connection failed: " . ($conn ? $conn->connect_error : "Connection is null");
    } else {
        $firstname = getPostData('firstname');
        $lastname = getPostData('lastname');
        $email = getPostData('email');
        $password = getPostData('password');
        $gender = getPostData('gender');

        // Sanitize inputs
        $firstname = $conn->real_escape_string($firstname);
        $lastname = $conn->real_escape_string($lastname);
        $email = $conn->real_escape_string($email);
        $gender = $conn->real_escape_string($gender);

        // Hash password
        $hashed_password = password_hash($password, PASSWORD_DEFAULT);

        $sql = "INSERT INTO users (firstname, lastname, email, password, gender) VALUES (?, ?, ?, ?, ?)";
        $stmt = $conn->prepare($sql);
        
        if ($stmt) {
            $stmt->bind_param("sssss", $firstname, $lastname, $email, $hashed_password, $gender);

            if ($stmt->execute()) {
                $message = "New record added successfully";
            } else {
                $message = "Error: " . $stmt->error;
            }

            $stmt->close();
        } else {
            $message = "Error in preparing statement: " . $conn->error;
        }
    }
}

// Display form and message
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User Registration Form</title>
    <style>
        .message {
            margin-bottom: 20px;
            padding: 10px;
            border-radius: 5px;
        }
        .success { background-color: #d4edda; color: #155724; }
        .error { background-color: #f8d7da; color: #721c24; }
    </style>
</head>
<body>
    <?php
    if (!empty($message)) {
        $messageClass = (strpos($message, 'successfully') !== false) ? 'success' : 'error';
        echo "<div class='message $messageClass'>$message</div>";
    }
    ?>

    <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
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
            <input type="radio" name="gender" value="male" required>Male
            <input type="radio" name="gender" value="female" required>Female
            <br>
            <br>
            <input type="submit" name="submit" value="Register User">
        </fieldset>
    </form>
</body>
</html>
<?php
// Close the connection at the end of the script
if ($conn) {
    $conn->close();
}
?>