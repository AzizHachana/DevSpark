<?php
$db = config::getConnexion();
$query = "SELECT id_e, COUNT(*) AS total_reservations FROM reservation GROUP BY id_e";
$statement = $db->prepare($query);
$statement->execute();
$data = $statement->fetchAll(PDO::FETCH_ASSOC);

$PaysNames = [];
$percentagesReservations = [];

foreach ($data as $row) {
    $PaysNames[] = $row['id_e']; // Utiliser l'ID de l'événement comme libellé
    $totalReservations = $row['total_reservations'];

    // Calculer les pourcentages de réservations
    $percentageReservation = ($totalReservations > 0) ? ($totalReservations / $totalReservations) * 100 : 0;

    $percentagesReservations[] = $percentageReservation;
}


?>