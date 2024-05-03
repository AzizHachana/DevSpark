<?php
include '../config.php';
include '../controller/CommentaireC.php';

$CommentaireC = new CommentaireC();

if (isset($_GET["id_com"])) {
    $CommentaireC->deleteCommentaire($_GET["id_com"]);
}


header("Location: " . $_SERVER['HTTP_REFERER']);
