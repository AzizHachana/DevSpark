<?php
include '../controller/ReservationC.php';

$ReservationC = new ReservationC();

if (isset($_GET["id_r"])) {
    $ReservationC->deleteReservation($_GET["id_r"]);
}

header('Location: ../view/listReservation.php');
?>
