<?php
require 'PHPMailerAutoload.php';

$mail = new PHPMailer;

// Uncomment the line below for verbose debugging (optional)
// $mail->SMTPDebug = 3; 

$mail->isSMTP();                                      // Set mailer to use SMTP
$mail->Host = 'smtp.gmail.com';                       // Corrected SMTP server
$mail->SMTPAuth = true;                               // Enable SMTP authentication
$mail->Username = 'sickso518@gmail.com';              // SMTP username
$mail->Password = 'gujarat123';                       // SMTP password or App Password
$mail->SMTPSecure = 'tls';                            // Enable TLS encryption
$mail->Port = 587;                                    // Correct port for TLS

$mail->setFrom('sickso518@gmail.com', 'My info website');
$mail->addAddress('as4820000@gmail.com');             // Add recipient
$mail->addReplyTo('sickso518@gmail.com');
$mail->isHTML(true);                                  // Set email format to HTML

$mail->Subject = 'gmail my info website';
$mail->Body    = '<h1 align=center>Thank you</h1><br><h4 align=center>for contacting us</h4>';
$mail->AltBody = 'This is the plain text body for non-HTML clients';

if(!$mail->send()) {
    echo 'Message could not be sent.';
    echo 'Mailer Error: ' . $mail->ErrorInfo;
} else {
    echo 'Message has been sent';
}
?>
