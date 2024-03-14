<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Get form data
    $name = $_POST["name"];
    $email = $_POST["email"];
    $message = $_POST["message"];

    // Process the data (you can perform validation, send emails, etc.)
    // For now, let's just print the form data
    echo "Name: $name <br>";
    echo "Email: $email <br>";
    echo "Message: $message <br>";
} else {
    // If the request method is not POST, redirect to the contact page
    header("Location: contact.html");
    exit();
}
?>