<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Sanitize and validate inputs
    $name = htmlspecialchars(strip_tags(trim($_POST["name"])));
    $phone = htmlspecialchars(strip_tags(trim($_POST["phone"])));
    $email = filter_var(trim($_POST["email"]), FILTER_SANITIZE_EMAIL);
    $message = htmlspecialchars(strip_tags(trim($_POST["msg"])));

    // Validate required fields
    if (empty($name) || empty($phone) || empty($email) || empty($message)) {
        echo "Please fill in all fields.";
        exit;
    }

    // Email settings
    $to = "zeeshik202@gmail.com"; // 🔁 Replace with your real email address
    $subject = "New Contact Form Message from $name";
    $headers = "From: $email\r\n";
    $headers .= "Reply-To: $email\r\n";
    $headers .= "Content-Type: text/plain; charset=UTF-8\r\n";

    $email_body = "You received a new message from your website:\n\n";
    $email_body .= "Name: $name\n";
    $email_body .= "Phone: $phone\n";
    $email_body .= "Email: $email\n\n";
    $email_body .= "Message:\n$message\n";

    // Send the email
    if (mail($to, $subject, $email_body, $headers)) {
        echo "Thank you! Your message has been sent.";
    } else {
        echo "Oops! Something went wrong. Please try again.";
    }
} else {
    echo "Invalid request method.";
}
?>
