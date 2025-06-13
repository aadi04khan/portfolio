<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $message = $_POST['message'];

    $to = "usernameahk@gmail.com"; // Change this to your email address
    $subject = "New Message from Contact Form";
    $body = "Name: $name\nEmail: $email\nMessage:\n$message";

    $headers = "From: $email";

    if (mail($to, $subject, $body, $headers)) {
        echo "Your message has been sent successfully.";
    } else {
        echo "Sorry, something went wrong. Please try again later.";
    }
}
?>
