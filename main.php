<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

// Include the PHPMailer autoload file, assuming you have installed PHPMailer via Composer.
require 'vendor/autoload.php';

function sendEmail($to, $subject, $message) {
    $mail = new PHPMailer(true);

    try {
        // Server settings
        $mail->SMTPDebug = SMTP::DEBUG_OFF;
        $mail->isSMTP();
        $mail->Host = 'smtp.gmail.com';
        $mail->SMTPAuth = true;
        $mail->Username = "kozimjonmalikov0727@gmail.com"; // Your Gmail email address
        $mail->Password = "emhumzzqtkzcezjt"; // Your Gmail password
        $mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;
        $mail->Port = 465;

        // Recipients
        $mail->setFrom("kozimjonmalikov0727@gmail.com", 'Your Name');
        $mail->addAddress($to);

        // Content
        $mail->isHTML(false);
        $mail->Subject = $subject;
        $mail->Body = $message;

        $mail->send();
        return true;
    } catch (Exception $e) {
        return "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
    }
}

// Example usage
$to = "kozimjonmalikov2001@gmail.com";
$subject = 'Test Email';
$message = 'This is a test email sent via Gmail SMTP with PHPMailer.';

$result = sendEmail($to, $subject, $message);
if ($result === true) {
    echo 'Email sent successfully!';
} else {
    echo 'Email could not be sent: ' . $result;
}
