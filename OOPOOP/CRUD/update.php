<?php
include "config.php";

// Update user data
if(isset($_POST['submit'])) {
    $user_id = $_POST['id'];
    $firstname = $_POST['firstname'];
    $lastname = $_POST['lastname'];
    $email = $_POST['email'];
    $gender = $_POST['gender'];
    $password = $_POST['password'];

    $sql = "UPDATE users SET firstname='$firstname', lastname='$lastname', email='$email', gender='$gender', password='$password' WHERE id='$user_id'";
    
    if ($conn->query($sql) === TRUE) {
        echo "Record updated successfully";
    } else {
        echo "Error updating record: " . $conn->error;
    }
}

// Display form
if (!isset($_POST['submit'])) {
?>
<h2>User Update Form</h2>
<form method="post" action="">
    <fieldset>
        <legend>Personal Information:</legend>
        First Name: <br>
        <input type="text" name="firstname" value="<?php echo isset($_GET['id']) ? $_GET['id'] : ''; ?>">
        <br>
        Last Name: <br>
        <input type="text" name="lastname">
        <br>
        Password: <br>
        <input type="password" name="password">
        <br>
        Gender: <br>
        <input type="radio" name="gender" value="male">Male
        <input type="radio" name="gender" value="female">Female
        <br>
        <br>
        <input type="submit" name="submit" value="Update User">
    </fieldset>
</form>

<?php
} else {
    header("Location: view.php");
}
?>
