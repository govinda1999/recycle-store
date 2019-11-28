<?php

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

require_once('./vendor/autoload.php');
// require  'PhpMailer/class.smtp.php';

/*
$mail = new PHPMailer(true);

try {
    //Server settings
    $mail->SMTPDebug = 0;
    $mail->isSMTP();
    $mail->Host = 'tls://smtp.gmail.com:587';
    $mail->SMTPAuth   = true;
    $mail->Username   = 'Email address';
    $mail->Password   = 'password';
    $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;
    $mail->Port       = 587;

    //Recipients
    $mail->setFrom('gspatel611999@gmail.com', 'Govinda Patel');
    $mail->addAddress('gspatel4555@gmail.com', 'Govinda Patel');


    // Attachments
    // Optional name

    // Content
    $mail->isHTML(true);
    $mail->Subject = 'Test Mail';
    $mail->Body    = 'Mail send by PHPMailer';

    if (!$mail->send()) {
        echo 'Mailer Error: ' . $mail->ErrorInfo;
    } else {
        echo 'Message sent!';
    }
} catch (Exception $e) {
    echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
}
*/
function send_mail($address, $amt, $tran)
{

    $mail = new PHPMailer(true);

    try {
        //Server settings
        $mail->SMTPDebug = 0;
        $mail->isSMTP();
        $mail->Host = 'tls://smtp.gmail.com:587';
        $mail->SMTPAuth   = true;
        $mail->Username   = 'email address';
        $mail->Password   = 'password';
        $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;
        $mail->Port       = 587;

        //Recipients
        $mail->setFrom('email address', 'Govinda Patel');
        $mail->addAddress($address);


        // Attachments
        // Optional name

        // Content
        $mail->isHTML(true);
        $mail->Subject = 'Thank you for using Recycle Store';
        $mail->Body    = "Dear User,<br><br>Thank you for payment on Recycle Store.<br>Your Transaction no is <b>$tran</b> and Amount is <b>$amt</b>.";

        if (!$mail->send()) {
            echo 'Mailer Error: ' . $mail->ErrorInfo;
        } else {
            echo 'Message sent!';
        }
    } catch (Exception $e) {
        echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
    }
}

// send_mail('gspatel4555@gmail.com', 200, 20191102020);
