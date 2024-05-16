<?php

include 'C:/xampp/htdocs/vacation/controller/unityuserU.php' ;


$userC = new unityuserU();

if (isset($_GET["id"])) {
    $userC->DeleteUnityuser($_GET["id"]);
}

//header('Location: ../examples/dashboard.php');
header('Location:listClient.php');
?>
