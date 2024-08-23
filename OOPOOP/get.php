<!-- The get method sends the encoded user information appended to the page request.
It builds a long string that appears in the server logs.
It has restrictions of sending up to 1024 characters only.
Do not use GET method in case you want to share confidential information.
It can not be used to share images or word documents to the server. -->

<?php
if(isset($_GET['name']) || isset($_GET['age'])){
    echo "Hi ".  $_GET['name']. "<br/>";
    echo "Your age is ". $_GET['age']." years";
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
    <form action = "<?php $_PHP_SELF; ?>" method ="GET">
    Name: <input type="text" name ="name"/>
    Age: <input type="text" name ="age"/>
    <input type="submit"/>
</form>
    
</body>
</html>