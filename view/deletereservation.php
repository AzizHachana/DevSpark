<?php
include '../controller/ReservationC.php';

$reservationC = new ReservationC();

if (isset($_GET["id"])) {
    $reservation_id = $_GET["id"];
    echo "ID de la réservation à supprimer : " . $reservation_id; // Ajoutez ce message de débogage

    // Supprimer d'abord les enregistrements liés dans d'autres tables
    // Par exemple, si vous avez des réservations associées à des chambres dans une table "chambres_reservation"
    // Assurez-vous de supprimer ces enregistrements d'abord

    // Ensuite, supprimez la réservation elle-même
    $success = $reservationC->deletereservation($reservation_id);

    if ($success) {
        // Rediriger vers la page de succès ou une autre page appropriée
        header('Location: list_reservation.php');
        exit;
    } else {
        // Gérer l'échec de la suppression
        echo "La suppression de la réservation a échoué. Veuillez réessayer.";
    }
} else {
    // Gérer le cas où l'identifiant de réservation n'est pas spécifié
    echo "L'identifiant de la réservation n'est pas spécifié.";
}
?>
