<?php
session_start();
include 'conn.php';

if(isset($_POST['username']) && isset($_POST['password'])){
    function validate($data){
        $data = trim($data);
        $data =stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
    }
}

$username = validate($_POST['username']);
$password = validate($_POST['password']);

if(empty($username)){
    header('Location: index.php?erro=user Name is required');
    exit();
}
else if(empty($password)){
    header('Location: index.php?erro= is required');
    exit();
}

$sql = "SELECT * FROM users WHERE use_name='$username' AND password='$password'";

$result = $mysqli->query($conn,$sql);
// successful login
if(mysqli_num_rows($result) === 1){
    $row = mysqli_fetch_assoc($result);
    if($row['username'] === $username && $row['password'] === $password){
        echo "Logged In!";
        $_SESSION['user_name'] = $row['username'];
        $_SESSION['name'] = $row['name'];
        $_SESSION['id'] = $row['id'];
        header("Location: home.php");
        exit();

    }else{
        header("Location: index.php?error=Incorect Username or password");
        exit();
    }
}else{
    header("Location: index.php");
    exit();
}