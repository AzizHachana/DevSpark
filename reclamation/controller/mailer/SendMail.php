<?php
require_once '../../model/connect.php';
$id = $_POST['id_rec'];
try {
    $query = $pdo->prepare('SELECT * FROM reclamation WHERE id = :id');
    $query->bindValue(':id', $id);
    $query->execute();
    $reponses = $query->fetchAll();
} catch (PDOException $e) {
    echo "Error: " . $e->getMessage();
}

foreach ($reponses as $reponse) {
    $to = $reponse['email'];

}

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require './PHPMailer/src/Exception.php';
require './PHPMailer/src/PHPMailer.php';
require './PHPMailer/src/SMTP.php';


$mail = new PHPMailer(true); // Passing `true` enables exceptions

//inputs 


$body =  $_POST["reponse"] ; 


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
    $mail->addAddress($to); // Fix the typo in the email address

    // Content
    $mail->isHTML(true);  // Set email format to HTML
    $mail->Subject = "Reponse" ;
    $mail->Body    = $body;
    $mail->AltBody = "Reponse" ;  // in case HTML is not supported

    $mail->send();
    header("Location: ../../view/Back/listContact.php");
} catch (Exception $e) {
    echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
}
?>
