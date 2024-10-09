<?php
// action_page.php

// Enable error reporting for debugging
error_reporting(E_ALL);
ini_set('display_errors', 1);

// Check if the form was submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Collect and sanitize form data
    $firstname = htmlspecialchars($_POST['firstname']);
    $lastname = htmlspecialchars($_POST['lastname']);
    $email = htmlspecialchars($_POST['email']);
    $service = htmlspecialchars($_POST['Service']);
    $country = htmlspecialchars($_POST['country']);
    $subject = htmlspecialchars($_POST['subject']);

    // Here you can process the data, e.g., save it to a database, send an email, etc.

    // Display a confirmation message
    echo "<h1>Thank You!</h1>";
    echo "<p>We have received your message.</p>";
    echo "<strong>First Name:</strong> $firstname<br>";
    echo "<strong>Last Name:</strong> $lastname<br>";
    echo "<strong>Email:</strong> $email<br>";
    echo "<strong>Service:</strong> $service<br>";
    echo "<strong>Country:</strong> $country<br>";
    echo "<strong>Subject:</strong> $subject<br>";
} else {
    echo "<p>Invalid request method.</p>";
}
?>
