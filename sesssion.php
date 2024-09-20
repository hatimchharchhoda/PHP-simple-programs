<?php
// Start the session
session_start();

// Check if the form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Check login credentials (You should have your own logic here)
    $username = "user"; // Replace with your actual username
    $password = "password"; // Replace with your actual password
    
    if ($_POST["username"] == $username && $_POST["password"] == $password) {
        // Set session variables
        $_SESSION["username"] = $username;
        $_SESSION["loggedin"] = true;

        // Redirect to a welcome page or any other page after successful login
        header("location: index.php");
        exit;
    } else {
        echo "Invalid username or password";
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
</head>
<body>

<h2>Login</h2>

<form method="post" action="<?php echo $_SERVER["PHP_SELF"];?>">
    <label for="username">Username:</label><br>
    <input type="text" id="username" name="username"><br>
    <label for="password">Password:</label><br>
    <input type="password" id="password" name="password"><br><br>
    <input type="submit" value="Login">
</form>

</body>
</html>