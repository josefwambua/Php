<?php
session_start();

if(isset($_SESSION['id']) && isset($_SESSION['username'])){
    ?>
    <!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>HOME</title>
        <link rel="stylesheet" href="styles.css">
    </head>
    <body>
        <h1>Hello, <?php echo $_SESSION['username']; ?></h1>
        <a href="logout.php">Logout</a>
    </body>
    </html>
    <?php
}
else {
    header("Location: index.php");
    exit();
}
?>