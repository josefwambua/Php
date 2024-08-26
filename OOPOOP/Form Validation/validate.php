<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Validation</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            line-height: 1.6;
            margin: 0;
            padding: 20px;
            background-color: #f4f4f4;
        }

        .container {
            width: 80%;
            max-width: 600px;
            margin: 0 auto;
            overflow: hidden;
            padding: 20px;
            background-color: #fff;
            border-radius: 5px;
            box-shadow: 0 2px 5px rgba(0,0,0,0.1);
        }

        h2 {
            color: #333;
            text-align: center;
        }

        label {
            display: block;
            margin-bottom: 15px;
        }

        input[type="text"], input[type="email"], input[type="url"], input[type="radio"] {
            width: 100%;
            height: 40px;
            margin-bottom: 15px;
            padding-left: 10px;
            border: 1px solid #ddd;
            border-radius: 5px;
        }

        input[type="submit"] {
            width: 100%;
            height: 50px;
            background-color: #4CAF50;
            color: white;
            padding: 15px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
        }

        input[type="submit"]:hover {
            background-color: #45a049;
        }

        .error {
            color: red;
            font-size: 12px;
            margin-left: 5px;
        }

        .success {
            color: green;
            font-size: 12px;
            margin-left: 5px;
        }
    </style>
</head>
<body>
    <div class="container">
        <h2>Form Validation</h2>

        <?php
        // define variables and set them to empty
        $nameErr = $emailErr = $genderErr = $websiteErr = $commentErr = "";
        $name = $email = $gender = $comment = $website = "";

        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            if (empty($_POST['name'])) {
                $nameErr = "Please enter a valid name";
            } else {
                $name = test_input($_POST['name']);
                if (!preg_match("/^[a-zA-Z ]*$/", $name)) {
                    $nameErr = "Only letters and spaces allowed";
                }
            }

            if (empty($_POST['email'])) {
                $emailErr = "Please enter a valid email address";
            } else {
                $email = test_input($_POST['email']);
                if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
                    $emailErr = "Invalid email format";
                }
            }

            if (empty($_POST["website"])) {
                $website = "";
            } else {
                $website = test_input($_POST["website"]);
                if (!preg_match("/^https?:\/\/[^\s]+/", $website)) {
                    $websiteErr = "Please enter a valid URL";
                }
            }

            if (empty($_POST['comment'])) {
                $comment = "";
            } else {
                $comment = test_input($_POST['comment']);
            }

            if (empty($_POST['gender'])) {
                $genderErr = "Please select a gender";
            } else {
                $gender = test_input($_POST['gender']);
            }
        }

        function test_input($data) {
            $data = trim($data);
            $data = stripslashes($data);
            $data = htmlspecialchars($data);
            return $data;
        }
        ?>

        <form method="post" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>">
            Full Name: <input type="text" name="name">
            <span class="error"><?php echo $nameErr; ?></span>
            <br><br>
            E-mail Address: <input type="email" name="email">
            <span class="error"><?php echo $emailErr; ?></span>
            <br><br>
            Website: <input type="url" name="website">
            <span class="error"><?php echo $websiteErr; ?></span>
            <br><br>
            Comment: <textarea name="comment"></textarea>
            <span class="error"><?php echo $commentErr; ?></span>
            <br><br>
            Gender: 
            <input type="radio" name="gender" value="male">Male
            <input type="radio" name="gender" value="female">Female
            <span class="error"><?php echo $genderErr; ?></span>
            <br><br>

            <input type="submit" name="submit" value="Submit">

            <br><br>
        </form>

        <?php
        // Displaying form inputs after submission
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            echo "<p class='success'>Form submitted successfully!</p>";
            echo "<h2>Your Input:</h2>";
            echo "Full Name: " . $name . "<br>";
            echo "Email: " . $email . "<br>";
            echo "Website: " . $website . "<br>";
            echo "Comment: " . $comment . "<br>"; 
            echo "Gender: " . $gender . "<br>";
        }
        ?>
    </div>
</body>
</html>
