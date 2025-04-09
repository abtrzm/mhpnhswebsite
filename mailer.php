<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require 'vendor/autoload.php';

function sendMail($to, $subject, $message) {
    $mail = new PHPMailer(true);
    
    try {
        // Enable SMTP
        $mail->isSMTP();
        $mail->Host = 'smtp.gmail.com'; 
        $mail->SMTPAuth = true;
        $mail->Username = 'mhpnhswebsite@gmail.com'; // Use your email
        $mail->Password = 'jvia rbyc zhty ljqj'; // Use an App Password, NOT your real password
        $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS; // FIXED: Use STARTTLS for port 587
        $mail->Port = 587; // FIXED: Port 587 requires STARTTLS

        // Debugging (Set to 2 for testing, 0 for production)
        $mail->SMTPDebug = 2; 
        $mail->Debugoutput = 'html';

        // Sender & Recipient
        $mail->setFrom('mhpnhswebsite@gmail.com', 'MHPNHS Official Website');
        $mail->addAddress($to); 

        // Email Content
        $mail->isHTML(true); // FIXED: Ensure HTML email format
        $mail->Subject = $subject;
        $mail->Body = $message;
        $mail->AltBody = strip_tags($message); // Fallback for non-HTML email clients

        // Send Email
        $mail->send();
        echo "Mail sent successfully!";
    } catch (Exception $e) {
        echo "Mail could not be sent. Error: {$mail->ErrorInfo}";
    }
}
?>
