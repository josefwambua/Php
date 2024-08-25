<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        .error {color: #ff0000}
    </style>
</head>
<body>
    <?php
    // define variables and set them to empty
    $nameErr= $emailErr= $genderErr= $website= " ";
    $name= $email= $gender= $comment= $website="";
    if($_SERVER["REQUEST_METHOD"] == "POST") {
        if(empty($_POST['name'])){
            $nameErr =  "Please enter a valid name";
        }
        else{
            $name = test_input($_POST['name']);
            if(preg_match('/^[a-zA-Z0-9]*$/', $name)){
                $nameErr = "Only Letters and white spacess allowed";
            }
        }
    }
    if(empty($_POST['email'])){
        $emailErr = "Please enter a valid email address";
    }else{
        $email = test_input($_POST['email']);
        if(!filter_var($email;, FILTER_VALIDATE_EMAIL)){
            $emailErr = "The email address is incorrect";

        }
    }
    if(empty($_POST["website"])){
        $website = "";
    }else{

        $website = test_input
    }
?>
    
</body>
</html>