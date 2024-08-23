<!-- The POST method sends information via the HTTP headers.
It does not have any restrictions on the data size to be sent.
It can be used to send ASCII as well as images and documents.
The information shared via the POST method is secure. -->

<?php
if (isset($_POST['name']) || isset($_POST['age'])) {
    if (preg_match("/[^A-Za-z'-]/", $_POST['name'])) {
        die("Invalid name. Name should be alphabetic.");
    }
    echo "Hello " . htmlspecialchars($_POST['name']) . "<br/>";
    echo "Your age is " . htmlspecialchars($_POST['age']) . " years";
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
    <form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" method="post" enctype="multipart/form-data">
        Name: <input type="text" name="name"/>
        Age: <input type="text" name="age"/>
        <input type="submit"/>
    </form>
</body>
</html>
