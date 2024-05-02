<?php

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

require '../vendor/autoload.php';

$email_client = $_POST["mail"] ?? "";
$expediteur_username = $_POST["expediteur_username"] ?? "";
$expediteur_password = $_POST["expediteur_password"] ?? "";
$message = $_POST['message'] ??"";

$mail = new PHPMailer(true);

try {
    if ($email_client && $expediteur_username && $expediteur_password) {
        // Paramètres du serveur SMTP
        $mail->SMTPDebug = SMTP::DEBUG_SERVER; // Activer le débogage SMTP
        $mail->isSMTP(); // Envoyer via SMTP
        $mail->Host       = 'smtp.gmail.com'; // Définir le serveur SMTP à utiliser
        $mail->SMTPAuth   = true; // Activer l'authentification SMTP
        $mail->Username   = $expediteur_username; // Nom d'utilisateur SMTP de l'expéditeur récupéré du formulaire
        $mail->Password   = $expediteur_password; // Mot de passe SMTP de l'expéditeur récupéré du formulaire
        $mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS; // Activer le chiffrement TLS
        $mail->Port       = 465; // Port SMTP à utiliser

        // Destinataire
        $mail->setFrom($email_client, 'Mailer'); // Utiliser l'adresse e-mail de l'expéditeur récupérée du formulaire
        $mail->addAddress('mahmoudlajmi3@gmail.com', 'Joe User'); // Adresse e-mail de destination

        // Contenu de l'e-mail
        $mail->isHTML(true); // Format HTML
        $mail->Subject = '';
        $mail->Body    =$message ;
        $mail->AltBody = 'Vous avez eu de problème pour charger le formulaire.';

        // Envoyer l'e-mail
        $mail->send();
        header('Location:confirmation.php');
        
    } else {
        echo '';
    }
} catch (Exception $e) {
    echo "Le message n'a pas pu être envoyé. Erreur du système d'envoi de courrier: {$mail->ErrorInfo}";
}



?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulaire d'envoi de mail</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f0f0f0;
            margin: 0;
            padding: 0;
        }
        .background {
    position: fixed;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    overflow: hidden;
    z-index: -1;
}

.background-image {
    width: 100%;
    height: 100%;
    object-fit: cover;
    filter: blur(2.5px); /* Appliquer le flou */
}
        .container {
            max-width: 500px;
            margin: 100px auto 50px;
            background-color: #fff;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }
        h2 {
            text-align: center;
            color: #333;
        }
        form {
            max-width: 400px;
            margin: 0 auto;
        }
        label {
            font-weight: bold;
            margin-bottom: 5px;
            display: block;
        }
        input[type="email"],
        input[type="text"],
        input[type="password"] {
            width: 100%;
            padding: 10px;
            margin-bottom: 20px;
            border: 1px solid #ccc;
            border-radius: 5px;
            box-sizing: border-box;
        }
        input[type="submit"] {
            background-color: #4CAF50;
            color: white;
            padding: 14px 20px;
            margin: 8px 0;
            border: none;
            border-radius: 4px;
            cursor: pointer;
            width: 100%;
            font-size: 16px;
        }
        input[type="submit"]:hover {
            background-color: #45a049;
        }
        #message-label {
            width: 300px; /* Largeur spécifique pour ce label */
            color: #333; /* Couleur du texte */
            font-weight: bold; /* Gras */
            margin-bottom: 10px; /* Marge en bas */
            display: block; /* Afficher en tant que bloc */
        }
    </style>
</head>
<body>
<div class="background">
        <img src="bg_2.jpg" alt="Background Image" class="background-image">
    </div>
    <div class="container">
        <h2>Formulaire d'envoi de mail</h2>
        <form action="send_mail.php" method="post">
            <label for="mail">Votre adresse e-mail :</label>
            <input type="email" id="mail" name="mail" required>
            
            <label for="expediteur_username">Nom d'utilisateur :</label>
            <input type="text" id="expediteur_username" name="expediteur_username" required>
            
            <label for="expediteur_password">Mot de passe  :</label>
            <input type="password" id="expediteur_password" name="expediteur_password" required>
            
            <label for="message" id="message-label">Votre message :</label>
            <textarea id="message" name="message" rows="4" required></textarea>
            
            <input type="submit" value="Envoyer le message">
        </form>
    </div>
</body>
</html>
