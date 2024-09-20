<?php
// Function to validate the password
function validatePassword($password) {
    // Check the length
    if (strlen($password) < 8 || strlen($password) > 12) {
        return false;
    }
    // Check for at least one uppercase letter, one number, and one special character
    if (!preg_match('/[A-Z]/', $password) || !preg_match('/[0-9]/', $password) || !preg_match('/[\W]/', $password)) {
        return false;
    }
    return true;
}

// Function to validate the mobile number
function validateMobileNumber($mobile) {
    // Check if the mobile number is exactly 10 digits
    return preg_match('/^\d{10}$/', $mobile);
}

// Function to register an employee
function registerEmployee($username, $email, $password, $mobile) {
    // Validate username and email
    if ($username !== $email) {
        return "Error: Username should be the same as email ID.";
    }
    
    // Validate password
    if (!validatePassword($password)) {
        return "Error: Password must be 8 to 12 characters long, contain at least one special character, one number, and one capital letter.";
    }
    
    // Validate mobile number
    if (!validateMobileNumber($mobile)) {
        return "Error: Mobile number must be exactly 10 digits.";
    }
    
    // Store employee information (for simplicity, using an array)
    $employee = array(
        "username" => $username,
        "email" => $email,
        "password" => $password, // Note: In a real application, never store plain passwords. Use hashing.
        "mobile" => $mobile
    );
    
    // Return success message
    return "Employee registered successfully: " . json_encode($employee);
}

// Example usage
$username = "john.doe@example.com";
$email = "john.doe@example.com";
$password = "P#sw0rd1";
$mobile = "1234567829";

$result = registerEmployee($username, $email, $password, $mobile);
echo $result;
?>
