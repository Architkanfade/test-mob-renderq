<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $to = "renderqmediapvtltd@gmail.com"; // Change to your email address
    $name = strip_tags(trim($_POST["name"]));
    $email = filter_var(trim($_POST["email"]), FILTER_SANITIZE_EMAIL);
    $website = strip_tags(trim($_POST["website"]));
    $message = trim($_POST["message"]);

    $subject = "New Contact Form Submission from $name";
    $email_content = "Name: $name\n";
    $email_content .= "Email: $email\n";
    $email_content .= "Website: $website\n\n";
    $email_content .= "Message:\n$message\n";

    $headers = "From: $name <$email>";

    if (mail($to, $subject, $email_content, $headers)) {
        echo "success";
    } else {
        echo "error";
    }
}
?>
