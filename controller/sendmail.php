<?php
session_start();

require_once __DIR__ . '/../vendor/autoload.php';
//Import PHPMailer classes into the global namespace
//These must be at the top of your script, not inside a function
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

//Load Composer's autoloader
require '../vendor/autoload.php';
$_SESSION["mail"]=$_POST["mail"];
//Create an instance; passing true enables exceptions
$mail = new PHPMailer(true);

try {
    //Server settings
    $mail->SMTPDebug = SMTP::DEBUG_SERVER;                      //Enable verbose debug output
    $mail->isSMTP();                                            //Send using SMTP
    $mail->Host       = 'smtp.gmail.com';                     //Set the SMTP server to send through
    $mail->SMTPAuth   = true;                                   //Enable SMTP authentication
    $mail->Username   = 'houbaiheb23@gmail.com';                     //SMTP username
    $mail->Password   = 'bcneklvxvjbwuzie';                               //SMTP password
    $mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;            //Enable implicit TLS encryption
    $mail->Port       = 465;                                    //TCP port to connect to; use 587 if you have set SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS

    //Recipients
    $mail->setFrom('houbaiheb23@gmail.com', 'Mailer');
    $mail->addAddress($_SESSION["mail"], 'Joe User');     //Add a recipient
    // $mail->addAddress('ellen@example.com');               //Name is optional
    // $mail->addReplyTo('info@example.com', 'Information');
    // $mail->addCC('cc@example.com');
    // $mail->addBCC('bcc@example.com');

    // //Attachments
    // $mail->addAttachment('/var/tmp/file.tar.gz');         //Add attachments
    // $mail->addAttachment('/tmp/image.jpg', 'new.jpg');    //Optional name

    //Content
    $mail->isHTML(true);                                  //Set email format to HTML
    $mail->Subject = 'Mot de passe oublie';
    $mail->Body    = 'Bonjour, voici votre lien pour modifier votre mot de passe : <a href=\'http://localhost/vacation/view/reset.html\'>Cliquez ici</a>';
    $mail->AltBody = 'Vous avez eu de problème pour charger le formulaire.';

    $mail->send();
    echo 'Le message a été envoyé.';
} catch (Exception $e) {
    echo "Le message n'a pas pu être envoyé. Erreur du système d'envoi de courrier: {$mail->ErrorInfo}";
}

header("Location: http://localhost/vacation/Admin/pages/samples/login.php");

?>