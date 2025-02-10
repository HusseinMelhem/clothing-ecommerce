<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $message = $_POST['message'];

    $to = 'info@mega-metal-international.com'; // The recipient email address
    $subject = 'Contact Us Form Submission from ' . $name;
    $headers = "From: info@mega-metal-international.com\r\n"; // The sender email address
    $headers .= "Reply-To: $email\r\n";
    $headers .= "Content-type: text/html\r\n";

    $body = "<h2>Contact Us Message</h2>";
    $body .= "<p><strong>Name:</strong> $name</p>";
    $body .= "<p><strong>Email:</strong> $email</p>";
    $body .= "<p><strong>Message:</strong><br>$message</p>";

    if (mail($to, $subject, $body, $headers)) {
        echo '<div class="alert alert-success">Message sent successfully</div>';
    } else {
        echo '<div class="alert alert-danger">Failed to send message</div>';
    }
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Contact Us</title>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container mt-5">
        <h1 class="my-4">Contact Us</h1>
        <p>Thank you for reaching out to us. We will get back to you as soon as possible.</p>
        <a href="contact.php" class="btn btn-primary">Back to Contact Form</a>
    </div>
</body>
</html>
