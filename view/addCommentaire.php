<?php
include '../config.php';
include '../controller/CommentaireC.php';
include '../controller/PaysC.php';

// Définir la liste des mots interdits


$CommentaireC = new CommentaireC();
$error = "";

session_start(); // Démarrez la session pour accéder aux données de l'utilisateur connecté

if (
    isset($_POST["id_pays"]) &&
    isset($_POST["Commentaire"]) &&
    isset($_POST["id_user"])
) {
    if (
        !empty($_POST["id_pays"]) &&
        !empty($_POST["Commentaire"]) &&
        !empty($_POST["id_user"])
    ) {
        $badWords = array("Test", "Azerty", "BadWord1", "BadWord2", "BadWord3");
        // Récupérer le commentaire soumis par l'utilisateur
        $commentaire = $_POST['Commentaire'];



        // Vérifier si le commentaire contient des mots interdits
        foreach ($badWords as $badWord) {
            if (stripos($commentaire, $badWord) !== false) {
                //replace the bad word with **** in the string and add an error message
                $commentaire = str_ireplace($badWord, '****', $commentaire);
                $_SESSION['error_message'] = "Votre commentaire contient des mots interdits. Veuillez faire attention!";
            }
        }

        // Si le commentaire ne contient pas de mots interdits, ajoutez-le à la base de données
        $Commentaire = new Commentaire(
            $_POST['id_pays'],
            $commentaire,
            $_POST['id_user'],
            0
        );

        $CommentaireC->ajouterCommentaire($Commentaire);

        header('Location: ../view/blog-single2.php?id=' . $_POST['id_pays']);
        exit;
    } else {
        $error = "Tous les champs doivent être remplis";
    }
}

header('Location: ../view/blog-single2.php?id=' . $_POST['id_pays']);
