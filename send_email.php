<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $to = "amaribishi13@gmail.com"; // Change this to the recipient's email address
    $subject = "New Message from Contact Form";
    $email = $_POST['email'];
    $message = $_POST['message'];
    
    // Validate email
    if (filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $headers = "From: " . $email . "\r\n" .
                   "Reply-To: " . $email . "\r\n" .
                   "X-Mailer: PHP/" . phpversion();
        
        // Send the email
        if (mail($to, $subject, $message, $headers)) {
            echo "Message sent successfully!";
        } else {
            echo "Failed to send message.";
        }
    } else {
        echo "Invalid email format.";
    }
} else {
    echo "Invalid request method.";
}
?>