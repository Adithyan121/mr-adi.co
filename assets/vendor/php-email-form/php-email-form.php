<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $receiving_email_address = 'adithyang24@gmail.com'; // Replace with your actual receiving email address

    // Get form data
    $name = $_POST['name'];
    $email = $_POST['email'];
    $whatsapp = $_POST['whatsapp'];
    $message = $_POST['message'];

    // Compose email
    $to = $receiving_email_address;
    $subject = "New Contact Form Submission";
    $email_body = "Name: $name\n";
    $email_body .= "Email: $email\n";
    $email_body .= "WhatsApp Number: $whatsapp\n";
    $email_body .= "Message:\n$message\n";

    // Send email
    $headers = "From: $email\r\n";
    if (mail($to, $subject, $email_body, $headers)) {
        echo "Message sent successfully!";
    } else {
        echo "Failed to send message. Please try again later.";
    }
}
?>
