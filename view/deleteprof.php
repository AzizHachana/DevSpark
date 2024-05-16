<?php
include '../controller/HotelC.php';


$hotelC = new HotelC();

if (isset($_GET["id"])) {
    $hotelC->deleteHotel($_GET["id"]);
}

//header('Location: ../examples/dashboard.php');
header('Location:listhotel1.php');
?>
