<?php
include "config.php";

$message = '';
$user = null;

// Function to safely get POST/GET data
function getData($method, $key) {
    $data = $method === 'POST' ? $_POST : $_GET;
    return isset($data[$key]) ? trim($data[$key]) : '';
}

// Fetch user data if ID is provided
if (isset($_GET['id'])) {
    $user_id = $conn->real_escape_string(getData('GET', 'id'));
    $stmt = $conn->prepare("SELECT id, firstname, lastname, email, gender FROM users WHERE id = ?");
    $stmt->bind_param("i", $user_id);
    $stmt->execute();
    $result = $stmt->get_result();
    $user = $result->fetch_assoc();
    $stmt->close();
}

// Update user data
if (isset($_POST['submit'])) {
    $user_id = $conn->real_escape_string(getData('POST', 'id'));
    $firstname = $conn->real_escape_string(getData('POST', 'firstname'));
    $lastname = $conn->real_escape_string(getData('POST', 'lastname'));
    $email = $conn->real_escape_string(getData('POST', 'email'));
    $gender = $conn->real_escape_string(getData('POST', 'gender'));
    $password = getData('POST', 'password');

    $sql = "UPDATE users SET firstname=?, lastname=?, email=?, gender=?";
    $params = [$firstname, $lastname, $email, $gender];
    $types = "ssss";

    if (!empty($password)) {
        $sql .= ", password=?";
        $params[] = password_hash($password, PASSWORD_DEFAULT);
        $types .= "s";
    }

    $sql .= " WHERE id=?";
    $params[] = $user_id;
    $types .= "i";

    $stmt = $conn->prepare($sql);
    $stmt->bind_param($types, ...$params);

    if ($stmt->execute()) {
        $message = "Record updated successfully";
    } else {
        $message = "Error updating record: " . $stmt->error;
    }
    $stmt->close();
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User Update Form</title>
    <style>
        .message { margin-bottom: 20px; padding: 10px; border-radius: 5px; }
        .success { background-color: #d4edda; color: #155724; }
        .error { background-color: #f8d7da; color: #721c24; }
    </style>
</head>
<body>
    <h2>User Update Form</h2>
    
    <?php
    if (!empty($message)) {
        $messageClass = (strpos($message, 'successfully') !== false) ? 'success' : 'error';
        echo "<div class='message $messageClass'>$message</div>";
    }
    
    if ($user): 
    ?>
    <form method="post" action="">
        <input type="hidden" name="id" value="<?php echo htmlspecialchars($user['id']); ?>">
        <fieldset>
            <legend>Personal Information:</legend>
            First Name: <br>
            <input type="text" name="firstname" value="<?php echo htmlspecialchars($user['firstname']); ?>" required>
            <br>
            Last Name: <br>
            <input type="text" name="lastname" value="<?php echo htmlspecialchars($user['lastname']); ?>" required>
            <br>
            Email: <br>
            <input type="email" name="email" value="<?php echo htmlspecialchars($user['email']); ?>" required>
            <br>
            Password: <br>
            <input type="password" name="password" placeholder="Leave blank to keep current password">
            <br>
            Gender: <br>
            <input type="radio" name="gender" value="male" <?php echo $user['gender'] === 'male' ? 'checked' : ''; ?> required>Male
            <input type="radio" name="gender" value="female" <?php echo $user['gender'] === 'female' ? 'checked' : ''; ?> required>Female
            <br>
            <br>
            <input type="submit" name="submit" value="Update User">
        </fieldset>
    </form>
    <?php else: ?>
        <p>User not found.</p>
    <?php endif; ?>

    <p><a href="view.php">Back to User List</a></p>
</body>
</html>
<?php
if ($conn) {
    $conn->close();
}
?>