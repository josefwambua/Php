<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <div class="container">
        <form action="login.php" method="post">
            <h2>LOGIN</h2>
            <!-- Checking for error if something is wrong -->
            <?php if(isset($_GET['error'])){?>
                <p class="error"><?php echo $_GET['error']; ?></p>
            <?php }?>
            <label>Username</label>
            <input type="text" name="username" placeholder="Username"><br>
            <label>Password</label>
            <input type="password" name="password" placeholder="password"><br>
            <button type="submit">Login</button>
        </form>   
    </div>
</body>
</html>
