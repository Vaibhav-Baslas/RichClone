<?php
if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $email = $_POST["email"];
    $password = $_POST["password"]; // Assuming you have a password field in your login form

    // Set your custom email and password for testing
    $customEmail = "test@example.com";
    $customPassword = "test123"; // You can use password_hash() to hash passwords in a real scenario
    
    // Compare the provided credentials with the custom ones
    if ($email === $customEmail && $password === $customPassword) {
        // Store user information in session storage
        session_start();
        $_SESSION["user"] = [
            "email" => $email,
        ];

        header("Location: index.html"); // Redirect to the main page after successful login
        exit();
    } else {
        // Redirect back to the login page with an error message
        header("Location: login.html?login=failed");
        exit();
    }
}
?>
