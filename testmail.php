<?php
require 'runs/src/PHPMailer.php';
require 'runs/src/SMTP.php';
require 'runs/src/Exception.php';

$mail = new PHPMailer\PHPMailer\PHPMailer();

$mail->isSMTP();
$mail->Host = 'mail.basicitsolution.com';
$mail->SMTPAuth = true;
$mail->Username = 'customercare@basicitsolution.com';
$mail->Password = 'omhuvmhhywtghggz';
$mail->SMTPSecure = 'tls';
$mail->Port = 587;

$mail->setFrom('customercare@basicitsolution.com', 'Test');
$mail->addAddress('customercare@basicitsolution.com');

$mail->Subject = "Test Mail";
$mail->Body = "It works";

if($mail->send()){
    echo "MAIL SENT";
} else {
    echo "ERROR: " . $mail->ErrorInfo;
}
?>


Sudesh@flip123