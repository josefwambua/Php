<?php 

// $name = "localhost";
//  $unae = "root";
//  $password = '';
//  $db_name = "login";

//  $conn = mysqli_connect($name, $unae, $password, $db_name);

 
// Database configuration
$DATABASE_HOST = 'localhost';
$DATABASE_USER = 'root';
$password = '';
$DATABASE_NAME = "login";

// Establish connection
$conn = mysqli_connect($DATABASE_HOST, $DATABASE_USER, $password, $DATABASE_NAME);

 if(!$conn){
    echo "Connection failed";
 }