<?php

$conn = mysqli_connect('localhost', 'root', '', 'deepart');
if ($conn) {
    echo "Connection successful";
} else {
    echo "Connection failed: " . mysqli_connect_error();
}

$name = $_POST['name'];
$email = $_POST['email'];
$number = $_POST['number'];

$query = "INSERT INTO users (name, email, number) VALUES ('$name', '$email', '$number')";

if (mysqli_query($conn, $query)) {
    echo "New record created successfully";
} else {
    echo "Error: " . $query . "<br>" . mysqli_error($conn);
}

mysqli_close($conn);

header("Location: index.php#contact");
exit();
