<?php
include '../config.php';
include '../controller/PaysC.php';

$PaysC = new PaysC();

if (isset($_GET["id"])) {
    $PaysC->deletePays($_GET["id"]);
}

header('Location:../examples/dashboard.php');
