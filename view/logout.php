<?php
    session_start();
    session_unset();
    session_destroy();
 
    $url = "/vacation/Admin/pages/samples/login.php";
    echo "<script>window.location.replace('$url');</script>";

    ?>