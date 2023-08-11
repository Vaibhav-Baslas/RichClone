<?php
session_start();

if (isset($_SESSION["user"])) {
    if (isset($_SESSION["subscription"])) {
        // Perform any additional cancellation logic here if needed
        
        // Unset the subscription information from the session
        unset($_SESSION["subscription"]);
        
        // Redirect back to the payment page with a success message
        header("Location: payment.html?cancel=success");
        exit();
    } else {
        // Redirect back to the payment page with a message if no subscription found
        header("Location: payment.html?cancel=no-subscription");
        exit();
    }
} else {
    // Redirect back to the login page if user not logged in
    header("Location: login.html");
    exit();
}
?>
