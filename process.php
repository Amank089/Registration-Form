<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = htmlspecialchars($_POST['name']);
    $email = htmlspecialchars($_POST['email']);
    $phone = htmlspecialchars($_POST['phone']);
    $category = htmlspecialchars($_POST['category']);
    $message = htmlspecialchars($_POST['message']);

    // Email where the response will be sent
    $to = "hello@amankr.org"; // Change this to your email
    $subject = "New Registration from " . $name;
    $body = "
        Name: $name\n
        Email: $email\n
        Phone: $phone\n
        Category: $category\n
        Message: $message
    ";
    
    $headers = "hello@amankr.org\r\n";

    if (mail($to, $subject, $body, $headers)) {
        echo "<script>alert('Form submitted successfully!'); window.location.href='registration.html';</script>";
    } else {
        echo "<script>alert('Error sending email.'); window.location.href='registration.html';</script>";
    }
}
?>
