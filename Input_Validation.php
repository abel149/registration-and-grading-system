<?php
// Initialize variables and error messages
$name = $email = $age = $password = "";
$nameErr = $emailErr = $ageErr = $passwordErr = "";

// Check if the form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Validate Name
    if (empty($_POST["name"])) {
        $nameErr = "Name is required.";
    } elseif (!preg_match("/^[a-zA-Z-' ]*$/", $_POST["name"])) {
        $nameErr = "Only letters and spaces are allowed.";
    } else {
        $name = htmlspecialchars(trim($_POST["name"]));
    }

    // Validate Email
    if (empty($_POST["email"])) {
        $emailErr = "Email is required.";
    } elseif (!filter_var($_POST["email"], FILTER_VALIDATE_EMAIL)) {
        $emailErr = "Invalid email format.";
    } else {
        $email = htmlspecialchars(trim($_POST["email"]));
    }

    // Validate Age
    if (empty($_POST["age"])) {
        $ageErr = "Age is required.";
    } elseif (!filter_var($_POST["age"], FILTER_VALIDATE_INT) || $_POST["age"] <= 0) {
        $ageErr = "Invalid age. Please enter a positive integer.";
    } else {
        $age = intval($_POST["age"]);
    }

    // Validate Password
    if (empty($_POST["password"])) {
        $passwordErr = "Password is required.";
    } elseif (strlen($_POST["password"]) < 8) {
        $passwordErr = "Password must be at least 8 characters long.";
    } else {
        $password = htmlspecialchars(trim($_POST["password"]));
    }

    // If all inputs are valid
    if (empty($nameErr) && empty($emailErr) && empty($ageErr) && empty($passwordErr)) {
        echo "<p>Validation successful!</p>";
        echo "<p>Name: $name</p>";
        echo "<p>Email: $email</p>";
        echo "<p>Age: $age</p>";
        // Password is typically not displayed for security reasons
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Input Validation</title>
</head>
<body>
    <h2>Input Validation Form</h2>
    <form method="POST" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
        <label for="name">Name:</label><br>
        <input type="text" name="name" id="name" value="<?php echo $name; ?>">
        <span style="color: red;"><?php echo $nameErr; ?></span><br><br>

        <label for="email">Email:</label><br>
        <input type="text" name="email" id="email" value="<?php echo $email; ?>">
        <span style="color: red;"><?php echo $emailErr; ?></span><br><br>

        <label for="age">Age:</label><br>
        <input type="text" name="age" id="age" value="<?php echo $age; ?>">
        <span style="color: red;"><?php echo $ageErr; ?></span><br><br>

        <label for="password">Password:</label><br>
        <input type="password" name="password" id="password">
        <span style="color: red;"><?php echo $passwordErr; ?></span><br><br>

        <button type="submit">Submit</button>
    </form>
</body>
</html>
