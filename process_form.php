<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Retrieve form data
    $name = $_POST['name'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $subject = $_POST['subject'];
    $message = $_POST['message'];

    // Set the recipient email address for notification to you
    $to = "verma.ruchi0123@gmail.com"; // Replace with your email

    // Set the email subject for notification to you
    $email_subject = "New Form Submission: $subject";

    // Construct the email message for notification to you
    $email_body = "You have received a new message from $name ($email, $phone):\n\n$message";

    // Set the email headers for the notification
    $headers = "From: $email";

    // Send the notification email to you
    mail($to, $email_subject, $email_body, $headers);

    // Send a confirmation email to the user
    $user_email = $_POST['user_email'];
    $user_subject = "Thank you for contacting us!";
    $user_message = "Dear $name,\n\nThank you for your message. We'll get back to you shortly.\n\nBest regards,\nThe EndPlastic Waste Team";

    // Set the email headers for the user's confirmation email
    $user_headers = "From: verma.ruchi0123@gmail.com"; // Replace with your email

    // Send the confirmation email to the user
    mail($user_email, $user_subject, $user_message, $user_headers);

    // Redirect the user to a thank you page after sending the confirmation email
    header("Location: index.html");
    exit;
}
?>
