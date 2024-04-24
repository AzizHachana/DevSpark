<?php
include '../controller/ReservationC.php';

$ReservationC = new ReservationC();

if (isset($_GET["id_r"])) {
    $eventC->deleteReservation($_GET["id_r"]);
}

header('Location: ../examples/dashboard.php');
?>
