<?php

require("class.phpmailer.php");

$mail = new PHPMailer();

$mail->IsSMTP();
$mail->Host = "mangalvivahonline.com";  /*SMTP server*/

$mail->SMTPAuth = true;
//$mail->SMTPSecure = "ssl";
$mail->Port = 587;
$mail->Username = "test@mangalvivahonline.com";  /*Username*/
$mail->Password = "J@.]f@)d6^,J";
/**Password**/

$mail->From = "test@mangalvivahonline.com";    /*From address required*/
$mail->FromName = "Test from Info";
$mail->AddAddress("bijendrasahu888@gmail.com");
//$mail->AddReplyTo("mail@mail.com");

$mail->IsHTML(true);

$mail->Subject = "Test message from server";
$mail->Body = "Test Mail<b>in bold!</b>";
//$mail->AltBody = "This is the body in plain text for non-HTML mail clients";

if (!$mail->Send()) {
    echo "Message could not be sent. <p>";
    echo "Mailer Error: " . $mail->ErrorInfo;
    exit;
}

echo "Message has been sent";
