<?php
// Only allow POST requests
if ($_SERVER["REQUEST_METHOD"] === "POST") {

    // Get email safely
    $email = isset($_POST['email']) ? trim($_POST['email']) : '';

    // Validate
    if (empty($email)) {
        echo "<script>alert('Email is required'); history.back();</script>";
        exit;
    }

    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        echo "<script>alert('Invalid email address'); history.back();</script>";
        exit;
    }

    // Email message
    $message = "New Email Subscription:\n\nEmail: $email";

    // Headers
    $headers  = "From: Subscription <no-reply@" . $_SERVER['SERVER_NAME'] . ">\r\n";
    $headers .= "Reply-To: $email\r\n";

    // Send email
    mail(
        "connect@fortunetechservices.com",   // change if needed
        "New Email Subscription",
        $message,
        $headers
    );

    // Success response
    echo "<script>
            alert('Thank you for subscribing!');
            window.location.href = '/';
          </script>";
}
?>
