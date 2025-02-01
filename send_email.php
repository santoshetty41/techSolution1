<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require 'vendor/autoload.php'; // Load PHPMailer

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = htmlspecialchars($_POST['name']);
    $email = htmlspecialchars($_POST['email']);
    $subject = htmlspecialchars($_POST['subject']);
    $message = nl2br(htmlspecialchars($_POST['message']));

    // Recipient Email
    $receiverEmail = "receiver@example.com"; // Change this to your recipient email

    $mail = new PHPMailer(true);

    try {
        // SMTP Configuration
        $mail->isSMTP();
        $mail->Host = 'smtp.gmail.com'; // Correct Gmail SMTP Host
        $mail->SMTPAuth = true;
        $mail->Username = 'your_email@gmail.com'; // Change this to your Gmail
        $mail->Password = 'your_password'; // Use your App Password
        $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;
        $mail->Port = 587; // TLS uses port 587

        // Sender & Recipient
        $mail->setFrom('your_email@gmail.com', 'Santosh SMTP');
        $mail->addReplyTo($email, $name); // User's email as reply-to
        $mail->addAddress($receiverEmail, "Receiver Name");

        // Email Content
        $mail->isHTML(true);
        $mail->Subject = $subject;
        $mail->Body = "<h3>Message from: $name</h3>
                       <p>Email: $email</p>
                       <p><strong>Subject:</strong> $subject</p>
                       <p>$message</p>";

        $mail->send();
        // Redirect to thank you page
        header("Location: thank_you.php");
        exit();
    } catch (Exception $e) {
        echo "Email sending failed: {$mail->ErrorInfo}";
    }
}
?>
