<?php
require 'PHPMailerAutoload.php';

$mail = new PHPMailer;

//$mail->SMTPDebug = 3;                               // Enable verbose debug output

$mail->isSMTP();                                      // Set mailer to use SMTP
$mail->Host = 'smtp1.gmail.com';  // Specify main and backup SMTP servers
$mail->SMTPAuth = true;                               // Enable SMTP authentication
$mail->Username = 'sickso518@gmail.com';                 // SMTP username
$mail->Password = 'gujarat123';                           // SMTP password
$mail->SMTPSecure = 'tls';                            // Enable TLS encryption, `ssl` also accepted
$mail->Port = 587;                                    // TCP port to connect to

$mail->setFrom('sickso518@gmail.com', 'My info website');
$mail->addAddress('as4820000@gmail.com');                 // Name is optional
$mail->addReplyTo('sickso518@gmail.com');
$mail->isHTML(true);                                  // Set email format to HTML

$mail->Subject = 'gmail my info website';
$mail->Body    = '<h1 align=center>thank you</h1><br><h4 align=center>for contacting us</h4>';
$mail->AltBody = 'This is the body in plain text for non-HTML mail clients';

if(!$mail->send()) {
    echo 'Message could not be sent.';
    echo 'Mailer Error: ' . $mail->ErrorInfo;
} else {
    echo 'Message has been sent';
}
?>