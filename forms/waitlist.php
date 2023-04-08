<?php
// Get the email from the form data
$email = $_POST['email'];

// Set the recipient email address
$to = 'hello@nsqft.com';

// Set the email subject
$subject = "New waitlist signup";

// Set the email message
$message = "A new user has signed up for the waitlist with the email address: $email";

// Send the email
mail($to, $subject, $message);

// Redirect the user to a thank-you page
header('Location: https://nsqft.com/thank-you.html');
exit();
?>
