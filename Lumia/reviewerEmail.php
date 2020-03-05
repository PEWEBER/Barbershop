<?php
/**
* This example shows settings to use when sending via Google's Gmail servers.
* This uses traditional id & password authentication - look at the gmail_xoauth.phps
* example to see how to use XOAUTH2.
* The IMAP section shows how to save this message to the 'Sent Mail' folder using IMAP commands.
*/
//Import PHPMailer classes into the global namespace
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
require 'PHPMailer-6.1.3/src/Exception.php';
require 'PHPMailer-6.1.3/src/PHPMailer.php';
require 'PHPMailer-6.1.3/src/SMTP.php';
//Create a new PHPMailer instance
$mail = new PHPMailer(true);
//Tell PHPMailer to use SMTP
$mail->isSMTP();
//Enable SMTP debugging
// SMTP::DEBUG_OFF = off (for production use)
// SMTP::DEBUG_CLIENT = client messages
// SMTP::DEBUG_SERVER = client and server messages

//$mail->SMTPDebug = SMTP::DEBUG_SERVER;

$mail->SMTPOptions = array(
'ssl' => array(
'verify_peer' => false,
'verify_peer_name' => false,
'allow_self_signed' => true
)
);
//Set the hostname of the mail server
$mail->Host = 'smtp.gmail.com';
// use
// $mail->Host = gethostbyname('smtp.gmail.com');
// if your network does not support SMTP over IPv6
//Set the SMTP port number - 587 for authenticated TLS, a.k.a. RFC4409 SMTP submission
$mail->Port = 587;
//Set the encryption mechanism to use - STARTTLS or SMTPS
$mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;
//Whether to use SMTP authentication
$mail->SMTPAuth = true;
//Username to use for SMTP authentication - use full email address for gmail
$mail->Username = 'lipscombconference@gmail.com';
//Password to use for SMTP authentication
$mail->Password = 'LUconf123';
//Set who the message is to be sent from
$mail->setFrom('lipscombconference@gmail.com', 'LU Admin');
//Set an alternative reply-to address
$mail->addReplyTo('lipscombconference@gmail.com', 'LU Admin');
//Set who the message is to be sent to
$mail->addAddress('eddiegyger92@gmail.com', 'Eddie Gyger');
//Set the subject line
$mail->Subject = 'New Submission';
//Read an HTML message body from an external file, convert referenced images to embedded,
//convert HTML into a basic plain-text alternative body
$mail->msgHTML(file_get_contents('contents.html'), __DIR__);
//Replace the plain text body with one created manually
$mail->AltBody = 'This is a plain-text message body';
//Attach an image file
//$mail->addAttachment('images/phpmailer_mini.png');
//send the message, check for errors
if (!$mail->send()) {
echo 'Mailer Error: '. $mail->ErrorInfo;
} else {
echo 'Message sent!';

}
?>
