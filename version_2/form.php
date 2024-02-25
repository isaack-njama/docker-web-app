<?php
    // Check if form is submitted
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        // Collect form data
        $username = $_POST['username'];
        $password = $_POST['password'];
        
        // Basic validation
        if (empty($username) || empty($password)) {
            echo "Username and password are required.";
        } else {
            echo "<h2>Thank you for submitting your login information:</h2>";
            echo "Username: $username <br>";
        }
    } else {
        // If the form is not submitted, redirect back to the form page
        header("Location: index.html");
        exit;
    }
?>
