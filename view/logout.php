<?php
    session_start();
    session_unset();
    session_destroy();
 
    $url = "../view/index.php";
    echo "<script>window.location.replace('$url');</script>";

    ?>