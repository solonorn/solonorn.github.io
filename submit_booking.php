<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Collect form data
    $tour_length = htmlspecialchars($_POST['tour_length']);
    $name = htmlspecialchars($_POST['name']);
    $email = htmlspecialchars($_POST['email']);
    $guests = htmlspecialchars($_POST['guests']);
    $month = htmlspecialchars($_POST['month']);

    // Prepare email
    $to = "your-email@example.com"; // Replace with your email address
    $subject = "New Fly Fishing Tour Booking Request";
    $message = "
        Tour Length: $tour_length\n
        Name: $name\n
        Email: $email\n
        Number of Guests: $guests\n
        Month of Travel: $month
    ";
    $headers = "From: no-reply@example.com";

    // Send email
    if (mail($to, $subject, $message, $headers)) {
        echo "<h2>Thank you!</h2><p>Your booking request has been received. We will contact you shortly.</p>";
    } else {
        echo "<h2>Oops!</h2><p>There was a problem submitting your request. Please try again later.</p>";
    }
}
?>