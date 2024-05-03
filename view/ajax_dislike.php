<?php
include '../config.php';
include "../controller/HotelC.php";

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Parse the JSON data sent in the request body
    $jsonData = file_get_contents('php://input');
    $data = json_decode($jsonData, true);

    // Now you can access the id value
    $id = $data['id'];

    $hotelC = new HotelC();
    $hotelC->incrementDislikes($id);

    // Renvoyer le nouveau nombre de dislikes à afficher sur la page
    echo $hotelC->getDislikesCount($id);
}