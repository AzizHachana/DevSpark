<?php
include '../../config/connexion.php';
include '../../model/reclam.php';

// Créer une instance du modèle de réservation
$reclams = new reclam($conn);

// Vérifier si la méthode de requête est POST
if(isset($_POST['submit_Add'])) {
    $sujet = $_POST["sujet"];
    $description = $_POST["description"];
    $date_reclamation = $_POST["date_reclamation"];

    $result = $reclams->createreclam($sujet, $description, $date_reclamation);
    header("Location: forum.php");
}

/******************Update***************/
if(isset($_POST['submit_update'])) {
    if(isset($_POST["id_reclamation"])) {
        // Récupérer les données du formulaire
        $id_reclamation = $_POST["id_reclamation"];
        $sujet = $_POST["sujet"];
        $description = $_POST["description"];
        $date_reclamation = $_POST["date_reclamation"];
        $message = $reclams->updatereclam($id_reclamation, $sujet, $description, $date_reclamation);
        header("Location: notifications.php");
    }
}

/************delete************/
if(isset($_POST['submit_delete'])) {
    if(isset($_POST["id_reclamation"])) {
        // Récupérer l'identifiant de la collaboration à supprimer
        $id_reclamation = $_POST["id_reclamation"];

        // Appeler la fonction deleteCollab de la classe appropriée pour effectuer la suppression
        $message = $reclams->deletereclam($id_reclamation);

        // Afficher le message de succès ou d'erreur
        echo $message;
        header("Location: notifications.php");
    } else {
        // Si l'identifiant de la collaboration n'est pas défini dans $_POST
        echo "reclam ID is missing in the form submission.";
    }
}

/*************Affichage**********************/
$reclams = $reclams->getAllreclams();
?>
