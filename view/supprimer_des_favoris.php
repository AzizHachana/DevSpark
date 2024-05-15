<?php
session_start();

if (isset($_POST['id'])) {
    $country_id = $_POST['id'];

    // Vérifier si le pays est présent dans les favoris
    $key = array_search($country_id, $_SESSION['favorites']);
    if ($key!== false) {
        // Supprimer le pays des favoris
        unset($_SESSION['favorites'][$key]);
        echo "Le pays a été supprimé des favoris avec succès.";
    } else {
        echo "Ce pays n'est pas dans vos favoris.";
    }
} else {
    echo "Erreur : ID du pays non spécifié.";
}
?>