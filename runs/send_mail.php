<?php

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require 'src/Exception.php';
require 'src/PHPMailer.php';
require 'src/SMTP.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $name  = $_POST['name'];
    $phone = $_POST['phone'];
    $email = $_POST['email'];
    $model = $_POST['model'];

    $mail = new PHPMailer(true);

    try {
        // 🔥 SMTP SETTINGS
        $mail->isSMTP();
        $mail->Host       = 'smtp.gmail.com';
        $mail->SMTPAuth   = true;
        $mail->Username   = 'jaspreet.ilfs@gmail.com'; // 👈 CHANGE
        $mail->Password   = 'ydipxzkgnjsdfkki';   // 👈 CHANGE
        $mail->SMTPSecure = 'tls';
        $mail->Port       = 587;

        // FROM & TO
        $mail->setFrom('jaspreet.ilfs@gmail.com', 'Printer Support');
        $mail->addAddress('jaspreet.ilfs@gmail.com'); // where you receive

        // CONTENT
        $mail->isHTML(true);
        $mail->Subject = 'New Printer Support Request';

        $mail->Body = "
        <h3>New Support Request</h3>
        <p><b>Name:</b> $name</p>
        <p><b>Phone:</b> $phone</p>
        <p><b>Email:</b> $email</p>
        <p><b>Model:</b> $model</p>
        ";

        $mail->send();
        echo "success";

    } catch (Exception $e) {
        echo "error: " . $mail->ErrorInfo;
    }
    echo "TEST OK";
    exit;
}

?>