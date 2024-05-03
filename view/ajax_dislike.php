<?php
include '../config.php';
include "../controller/PaysC.php";

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $id = $_POST['id'];

    $Pays = new PaysC();

    if (!$Pays->hasDisliked($id)) { // Vérification côté serveur si l'utilisateur a déjà disliké
        $Pays->incrementDislikes($id);
        echo $Pays->getDislikesCount($id);
    } else {
        echo "You have already disliked this country."; // Message si l'utilisateur a déjà disliké
    }
}
