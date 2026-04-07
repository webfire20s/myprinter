<?php
require 'runs/src/PHPMailer.php';
require 'runs/src/SMTP.php';
require 'runs/src/Exception.php';

$mail = new PHPMailer\PHPMailer\PHPMailer();

$mail->isSMTP();
$mail->Host = 'smtp.gmail.com';
$mail->SMTPAuth = true;
$mail->Username = 'sarthakagrwal10@gmail.com';
$mail->Password = 'omhuvmhhywtghggz';
$mail->SMTPSecure = 'tls';
$mail->Port = 587;

$mail->setFrom('sarthakagrwal10@gmail.com', 'Test');
$mail->addAddress('sarthakagrwal10@gmail.com');

$mail->Subject = "Test Mail";
$mail->Body = "It works";

if($mail->send()){
    echo "MAIL SENT";
} else {
    echo "ERROR: " . $mail->ErrorInfo;
}
?>


