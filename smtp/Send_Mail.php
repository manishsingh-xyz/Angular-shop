<?php
function Send_Mail($to,$subject,$message)
{
require 'class.phpmailer.php';
$from       = "manish@chainwebber.com";
$mail       = new PHPMailer();
$mail->IsSMTP(true);            // use SMTP
$mail->IsHTML(true);
$mail->SMTPAuth   = true;                  // enable SMTP authentication
$mail->Host       = "tls://md-51.webhostbox.net"; //  server, note "tls://" protocol
$mail->Port       =  465;                    // set the SMTP port
$mail->Username   = "manish@chainwebber.com";  // SMTP  username
$mail->Password   = "manishsingh";  // SMTP password
$mail->SetFrom($from, 'www.Angreasy.com');
$mail->AddReplyTo($from,'www.Angreasy.com');
$mail->Subject    = $subject;
$mail->MsgHTML($message);
$address = $to;
$mail->AddAddress($address, $to);
$mail->Send();  
}
?>
