<?php
include '../controller/EventC.php';

$eventC = new EventC();

if (isset($_GET["id"])) {
    $eventC->deleteEvent($_GET["id"]);
}

header('Location: ../examples/dashboard.php');
?>
