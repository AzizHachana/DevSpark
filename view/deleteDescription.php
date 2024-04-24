<?php
include '../config.php';
include '../controller/DescriptionC.php';

$DescriptionC = new DescriptionC();

if (isset($_GET["id"])) {
    $DescriptionC->deleteDescription($_GET["id"]);
}

header('Location:../examples/dashboard.php');