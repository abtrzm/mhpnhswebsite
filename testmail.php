<?php

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

// Load PHPMailer (if using Composer)
require 'vendor/autoload.php';

// If manually downloaded, include the files
// require 'path-to-phpmailer/src/PHPMailer.php';
// require 'path-to-phpmailer/src/Exception.php';
// require 'path-to-phpmailer/src/SMTP.php';

$mail = new PHPMailer(true);

try {
    // SMTP Configuration
    $mail->isSMTP();
    $mail->Host       = 'smtp.gmail.com'; // SMTP server (use 'smtp.office365.com' for Outlook)
    $mail->SMTPAuth   = true;
    $mail->Username   = 'mhpnhswebsite@gmail.com'; // Your email address
    $mail->Password   = 'fvpz pdnq xbcw ylxh'; // Your Gmail App Password (not your regular password)
    $mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;
    $mail->Port       = 465;

    // Sender & Recipient
    $mail->setFrom('mhpnhswebsite@gmail.com', 'Marcelo H. Del Pilar National High School');
    $mail->addAddress('abtrzmrsgn@gmail.com', 'Anika'); // Replace with recipient's email

    // Email Content
    $mail->isHTML(true);
    $mail->Subject = 'Test Email from PHPMailer';
    $mail->Body    = '<h3>This is a test email sent using PHPMailer.</h3>';
    $mail->AltBody = 'This is a test email sent using PHPMailer (Plain Text)';

    // Send Email
    if ($mail->send()) {
        echo 'Mail Sent Successfully!';
    } else {
        echo 'Mail Sending Failed!';
    }
} catch (Exception $e) {
    echo "Message could not be sent. Error: {$mail->ErrorInfo}";
}
