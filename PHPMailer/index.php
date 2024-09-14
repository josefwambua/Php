<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;
use PHPMailer\PHPMailer\SMTP;

require 'src/Exception.php';
require 'src/PHPMailer.php';
require 'src/SMTP.php';

$mail = new PHPMailer(true);

try {
    $mail->isSMTP();
    $mail->Host       = 'smtp.gmail.com';
    // $mail->SMTPDebug  = 2; // For debugging purposes only
    $mail->Port       = 587; // For STARTTLS
    // $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;
    $mail->SMTPAuth   = true;                                 //TCP port to connect to; use 587 for STARTTLS

    //Authentication
    $mail->isHTML(true);                                       //Set email format to HTML
    $mail->Username   = 'annonymasannonimix@gmail.com';                 //Your Gmail address
    $mail->Password   = 'pwaj vwld fwxi jrpc';           //Your app-specific password

    //Recipients
    $mail->setFrom('annonymasannonimix@gmail.com', 'Mailer');
    $mail->addAddress('recipient@example.com', 'Recipient Name');
    $mail->addReplyTo('info@example.com', 'Information');

    //Content
    $mail->Subject = 'Intern Position';
    $mail->Body    = 'Hello Joseph, This is to notify you that you have been successfully absorbed to our company</b>';
    $mail->AltBody = 'You will have to start your work immediately';

    $mail->send();
    echo 'Message has been sent';
} catch (Exception $e) {
    echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
}
