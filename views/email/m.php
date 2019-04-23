<?php
include 'PHPMailerAutoload.php';
include 'class.phpmailer.php';
include 'class.smtp.php';
function mailing($adresse,$message)
{
$mail = new PHPMailer;

$mail->isSMTP();                                      // Set mailer to use SMTP
$mail->Host = 'smtp.gmail.com';  // Specify main and backup SMTP servers
$mail->SMTPAuth = true;                               // Enable SMTP authentication
$mail->Username = 'opticbenmoussa@gmail.com';                 // SMTP username
$mail->Password = 'cyberknights123';                           // SMTP password
$mail->SMTPSecure = 'tls';                            // Enable encryption, 'ssl' also accepted

$mail->From = 'nada.chniter@esprit.tn';
$mail->FromName = 'Ben Moussa Optic';
$mail->addAddress($adresse);     // Add a recipient


$mail->WordWrap = 50;                                 // Set word wrap to 50 characters
$mail->isHTML(true);                                  // Set email format to HTML

$mail->Subject = 'Password Recovery';
$mail->Body    = $message;


if(!$mail->send()) 
{
    echo 'Message could not be sent.';
    echo 'Mailer Error: ' . $mail->ErrorInfo;
}
 else 
 {
    echo 'Email has been sent';
}
}
?>