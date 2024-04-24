<?php
include '../config.php';
include "../controller/PaysC.php";

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $id = $_POST['id'];

    $Pays = new PaysC();
    $Pays->incrementDislikes($id);

    // Renvoyer le nouveau nombre de dislikes à afficher sur la page
    echo $Pays->getDislikesCount($id);
}