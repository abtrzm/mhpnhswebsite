<?php 

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require 'vendor/autoload.php'; 

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = htmlspecialchars($_POST["name"]);
    $email = htmlspecialchars($_POST["email"]);
    $subject = htmlspecialchars($_POST["subject"]);
    $message = htmlspecialchars($_POST["message"]);

    $mail = new PHPMailer(true);
    
    try {
        // SMTP Configuration
        $mail->isSMTP();
        $mail->Host = 'smtp.gmail.com';
        $mail->SMTPAuth = true;
        $mail->Username   = 'mhpnhswebsite@gmail.com'; // Use your email
        $mail->Password   = 'jvia rbyc zhty ljqj';   // Use App Password (NEVER share real passwords)
        $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS; // FIXED: Use STARTTLS for port 587
        $mail->Port = 587; // FIXED: Port 587 requires STARTTLS

        // Debugging (Enable for testing, disable in production)
        $mail->SMTPDebug = 2; // Set to 0 when done testing
        $mail->Debugoutput = 'html';

        // Sender & Recipient
        $mail->setFrom('mhpnhswebsite@gmail.com', 'Website Contact Form'); // FIXED: Sender must match SMTP email
        $mail->addReplyTo($email, $name); // Allows the recipient to reply to the sender
        $mail->addAddress('mhpnhswebsite@gmail.com'); // Replace with recipient email

        // Email Content
        $mail->isHTML(true);
        $mail->Subject = "New Message from Contact Form: $subject";
        $mail->Body    = "
            <h2>New Contact Form Message</h2>
            <p><strong>Name:</strong> $name</p>
            <p><strong>Email:</strong> $email</p>
            <p><strong>Message:</strong><br>$message</p>
        ";

        // Send Email
        if ($mail->send()) {
            echo "success";
        } else {
            echo "error: " . $mail->ErrorInfo;
        }
    } catch (Exception $e) {
        echo "Mailer Error: " . $mail->ErrorInfo;
    }
} else {
    echo "invalid";
}
