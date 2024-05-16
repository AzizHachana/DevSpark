<?php
include '../config.php';
include '../controller/CommentaireC.php';
include '../controller/PaysC.php';

// Définir la liste des mots interdits


$CommentaireC = new CommentaireC();


if (
    !empty($_POST["comment-body"]) 
) {
    $badWords = array("Test", "Azerty", "BadWord1", "BadWord2", "BadWord3");
    $commentaire = $_POST["comment-body"];
    $id = $_POST["id_com"];


    // Vérifier si le commentaire contient des mots interdits
    foreach ($badWords as $badWord) {
        if (stripos($commentaire, $badWord) !== false) {
            //replace the bad word with **** in the string and add an error message
            $commentaire = str_ireplace($badWord, '****', $commentaire);
            $_SESSION['error_message_edit'] = "Votre commentaire contient des mots interdits. Veuillez faire attention!";
        }
    }

    $CommentaireC->updateCommentaire($id, $commentaire);

    header("Location: " . $_SERVER['HTTP_REFERER']);
    exit;
} else {
    header("Location: " . $_SERVER['HTTP_REFERER']);
}

header("Location: " . $_SERVER['HTTP_REFERER']);
