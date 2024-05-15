<?php
session_start();

// Vérifier si l'utilisateur est connecté
if (!isset($_SESSION['favorites'])) {
    $_SESSION['favorites'] = array(); // Initialiser un tableau de favoris s'il n'existe pas encore
}

// Vérifier si l'ID du pays est fourni via la méthode POST
if (isset($_POST['id'])) {
    $country_id = $_POST['id'];

    // Vérifier si le pays n'est pas déjà dans les favoris
    if (!in_array($country_id, $_SESSION['favorites'])) {
        // Ajouter le pays aux favoris
        $_SESSION['favorites'][] = $country_id;
        echo "Le pays a été ajouté aux favoris avec succès.";
    } else {
        echo "Le pays est déjà dans vos favoris.";
    }
} else {
    echo "Erreur : ID du pays non spécifié.";
}

?>
