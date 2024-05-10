<?php
include '../config.php';
include "../controller/HotelC.php";

// Message de débogage pour vérifier que la requête est reçue

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Parse the JSON data sent in the request body
    $jsonData = file_get_contents('php://input');
    $data = json_decode($jsonData, true);

    // Now you can access the id value
    $id = $data['id'];

    $hotelC = new HotelC();
    $hotelC->incrementLikes($id);

    // Renvoyer le nouveau nombre de likes à afficher sur la page
    echo $hotelC->getLikesCount($id);
} else {
    echo "Erreur : Méthode de requête non valide.";
}
?>