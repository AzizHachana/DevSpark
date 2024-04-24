<?php
include '../config.php';
include "../controller/PaysC.php";

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $id = $_POST['id'];

    $Pays = new PaysC();
    $Pays->incrementLikes($id);

    // Renvoyer le nouveau nombre de likes à afficher sur la page
    echo $Pays->getLikesCount($id);
}