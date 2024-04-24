<?php
include '../controller/ReservationC.php';


$reservationC = new ReservationC();

if (isset($_GET["id"])) {
    $reservationC->deletereservation($_GET["id"]);
}

//header('Location: ../examples/dashboard.php');
header('Location:listhotel1.php');
?>
