<?php

include_once '../controller/ReservationC.php';

// Vérifier si le formulaire a été soumis
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Vérifier si l'ID de l'offre est présent dans les données postées
    if (isset($_POST['id_r'])) {
        // Récupérer l'ID de l'offre à partir des données postées
        $id_r = $_POST['id_r'];

        // Créer une instance de la classe JobControl
        $reservationC = new ReservationC();

        // Récupérer les détails de l'offre en utilisant son ID
        $reservation = $reservationC->getReservationById($id_r);

        // Vérifier si l'offre existe
        if ($reservation) {
            // Exporter les données au format CSV
            header('Content-Type: text/csv');
            header('Content-Disposition: attachment; filename="offre_data.csv"');

            // Ouvrir le flux de sortie avec "w" pour écrire dans le flux sans effacer le contenu existant
            $output = fopen('php://output', 'w');

            // Écrire les en-têtes du CSV
            fputcsv($output, array('id_r', 'date_check_in', 'date_check_out', 'nbr_p', 'status', 'id_e'));

            // Écrire les données de l'offre dans le CSV
            fputcsv($output, array($reservation['id_r'], $reservation['date_check_in'], $reservation['date_check_out'], $reservation['nbr_p'], $offer['status'], $offer['id_e']));

            // Fermer le flux de sortie
            fclose($output);

            exit;
        } else {
            // Si l'offre n'existe pas, vous pouvez afficher un message d'erreur ou rediriger l'utilisateur
            echo "la reservation n'exsite pas n'existe pas.";
            exit;
        }
    }
}
?>
