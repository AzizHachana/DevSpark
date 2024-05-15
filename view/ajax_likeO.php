<?php
include '../config.php';
include "../controller/PaysC.php";

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $id = $_POST['id'];

    $Pays = new PaysC();

    if (!$Pays->hasLiked($id)) { // Vérification côté serveur si l'utilisateur a déjà aimé
        $Pays->incrementLikes($id);
        echo $Pays->getLikesCount($id);
    } else {
        echo "You have already liked this country."; // Message si l'utilisateur a déjà aimé
    }
}