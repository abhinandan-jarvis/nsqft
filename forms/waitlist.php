<?php
// Get the email from the form data
$email = $_POST['email'];

// Set the recipient email address
$to = '1sqftproptech@gmail.com';

// Set the email subject
$subject = "New waitlist signup";

// Set the email message
$message = "A new user has signed up for the waitlist with the email address: $email";

// Send the email
mail($to, $subject, $message);

// Redirect the user to a thank-you page
header('Location: thank-you.html');
exit();
?>
