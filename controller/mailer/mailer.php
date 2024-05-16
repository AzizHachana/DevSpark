<?php

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require './PHPMailer/src/Exception.php';
require './PHPMailer/src/PHPMailer.php';
require './PHPMailer/src/SMTP.php';


$mail = new PHPMailer(true); // Passing `true` enables exceptions

//inputs 

$target = $_POST["email"] ; 
$body =  $_POST["body"] ; 
$alt = $_POST["alt"] ; 


try {
    // Server settings
    $mail->isSMTP();
    $mail->Host       = 'smtp.gmail.com';        // Specify SMTP server
    $mail->SMTPAuth   = true;                    // Enable SMTP authentication
    $mail->Username   = 'aminesouissi720@gmail.com';   // SMTP username
    $mail->Password   = 'hgbeokgzrijxfwqv ';      // SMTP password
    $mail->SMTPSecure = 'ssl';                   // Enable TLS encryption, `ssl` also accepted
    $mail->Port       = 465;                     // TCP port to connect to

    // Recipients
    $mail->setFrom('aminesouissi720@gmail.com');
    $mail->addAddress($target); // Fix the typo in the email address

    // Content
    $mail->isHTML(true);  // Set email format to HTML
    $mail->Subject = "Reponse" ;
    $mail->Body    = $body;
    $mail->AltBody = "Reponse" ;  // in case HTML is not supported

    $mail->send();
    header("Location: ../view/Back/listReponse.php");
} catch (Exception $e) {
    echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
}

?>