<?php

// Check if both "name" and "age" are set in the request
if(isset($_REQUEST["name"]) && isset($_REQUEST["age"])) {
    // Sanitize the inputs to prevent XSS attacks
    $name = htmlspecialchars($_REQUEST["name"], ENT_QUOTES, 'UTF-8');
    $age = htmlspecialchars($_REQUEST["age"], ENT_QUOTES, 'UTF-8');

    echo "Hi " . $name . "<br/>";
    echo "Your age is " . $age . " years";
    exit();
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <!-- Corrected the form action and method attributes -->
    <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
        NAME : <input type="text" name="name"/>

        Age: <input type="text" name="age"/>
        <input type="submit"/>
    </form>
</body>
</html>
