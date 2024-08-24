<!DOCTYPE html>
<htm lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Validation</title>
    <!-- Include Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <?php 
    // Defining variables and setting them to empty values
    $fullname = $email = $gender = $comment = $number = $age = "";

    // Check if form is submitted
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $fullname = test_input($_POST['name']);
        $email = test_input($_POST['email']);
        $gender = test_input($_POST['gender']);
        $comment = test_input($_POST['comment']);
        $number = test_input($_POST['number']);
        $age = test_input($_POST['age']);
    }

    function test_input($data) {
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
    }
    ?>
    
    <div class="container mt-5">
        <h2>Form Validation</h2>
        <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" class="mt-4">
            <!-- Full Name -->
            <div class="mb-3">
                <label for="name" class="form-label">Full Name</label>
                <input type="text" name="name" class="form-control" id="name">
            </div>
            <!-- Email -->
            <div class="mb-3">
                <label for="email" class="form-label">Email</label>
                <input type="email" name="email" class="form-control" id="email">
            </div>
            <!-- Number -->
            <div class="mb-3">
                <label for="number" class="form-label">Number (Optional)</label>
                <input type="tel" name="number" class="form-control" id="number">
            </div>
            <!-- Age -->
            <div class="mb-3">
                <label for="age" class="form-label">Age</label>
                <input type="number" name="age" class="form-control" id="age">
            </div>
            <!-- Comment -->
            <div class="mb-3">
                <label for="comment" class="form-label">Comment</label>
                <textarea name="comment" rows="5" cols="40" class="form-control" id="comment"></textarea>
            </div>
            <!-- Gender -->
            <div class="mb-3">
                <label class="form-label">Gender</label>
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="gender" id="male" value="male">
                    <label class="form-check-label" for="male">Male</label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="gender" id="female" value="female">
                    <label class="form-check-label" for="female">Female</label>
                </div>
            </div>
            <!-- Submit Button -->
            <button type="submit" class="btn btn-primary">Submit Form</button>
        </form>

        <?php
        // PHP code to display form inputs after submission remains unchanged
        ?>
    </div>
    <!-- Include Bootstrap JS Bundle -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"></script>

    <?php
    // Displaying form inputs after submission
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        echo "<h2>Your Input:</h2>";
        echo "Full Name: " . $fullname . "<br>";
        echo "Email: " . $email . "<br>";
        echo "Age: " . $age . "<br>";
        echo "Number: " . $number . "<br>";
        echo "Comment: " . $comment . "<br>"; 
        echo "Gender: " . $gender . "<br>";
    }
    ?>
</body>
</html>
