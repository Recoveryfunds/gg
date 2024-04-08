<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $to_email = "nastygm18@gmail.com";
    $subject = "New Email Address Submitted";
    $email = $_POST['email'];
    
    // Compose the message
    $message = "A new email address has been submitted:\n\n";
    $message .= "Email Address: " . $email . "\n";
    
    // Send email
    if (mail($to_email, $subject, $message)) {
        echo "Email sent successfully!";
    } else {
        echo "Failed to send email. Please try again later.";
    }
}
?>
