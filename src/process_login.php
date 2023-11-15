<?php
require 'functions/PasswordInputValidator.php';
use Validator\PasswordInputValidator;

session_start();

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $validator = new PasswordInputValidator();
    $password = $_POST['password'];

    # If valid password
    $error = $validator->validatePassword($password);
    if ($error === true) {
        # Set login session
        $_SESSION['loggedin'] = true;
        $_SESSION['password'] = $password;
        header("Location: welcome");
        exit();
    }
    # If not valid password, redirect back to login 
    else {
        // Pass the error message to login page
        header("Location: login?error=" . urlencode($error));
        exit();
    }
}
?>
