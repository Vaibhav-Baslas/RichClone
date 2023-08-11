<?php
if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $name = $_POST["name"];
    $email = $_POST["email"];
    $password = $_POST["password"];
    
    // Create a JSON object with user data
    $user = [
        "name" => $name,
        "email" => $email,
        "password"=> $password,
    ];
    
    // Encode the user data as JSON
    $userData = json_encode($user);
    
    // Store user data in a session cookie
    setcookie("userData", $userData, time() + 3600, "/"); // Expires in 1 hour
    
    header("Location: index.html"); // Redirect to the main page after registration
    exit();
}
?>
