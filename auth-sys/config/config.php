<?php 

//host
$host = "localhost";
$dbname = "auth-sys";


// username

$user =  "root";
// password
$pass = "";


$conn = new PDO("mysql:host=$host;dbname=$dbname;", $user, $pass);

if($conn == true){
    echo "Connection successful";
}else{
    echo "Connection failed : err";
}
