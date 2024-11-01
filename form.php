<?php
// Enable error reporting for troubleshooting
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

if ($_SERVER["REQUEST_METHOD"] === "POST") {
    // Retrieve form data safely
    $tour_length = htmlspecialchars($_POST['tour_length'] ?? '');
    $name = htmlspecialchars($_POST['name'] ?? '');
    $email = htmlspecialchars($_POST['email'] ?? '');
    $guests = htmlspecialchars($_POST['guests'] ?? '');
    $month = htmlspecialchars($_POST['month'] ?? '');

    // Basic form validation
    if (empty($tour_length) || empty($name) || empty($email) || empty($guests) || empty($month)) {
        echo "<h2>Error: Please fill in all required fields.</h2>";
    } else {
        // Display a success message if all fields are filled
        echo "<h2>Form submitted successfully!</h2>";
        echo "<p>Tour Length: $tour_length</p>";
        echo "<p>Name: $name</p>";
        echo "<p>Email: $email</p>";
        echo "<p>Number of Guests: $guests</p>";
        echo "<p>Month of Travel: $month</p>";
    }
} else {
    echo "<h2>Error: Form not submitted correctly.</h2>";
}