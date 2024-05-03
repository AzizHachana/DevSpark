<?php
include '../controller/CommentaireC.php';

$CommentaireC = new CommentaireC();
$CommentaireC->updateCommentaire($_POST['id_com'], $_POST['Commentaire']);
?>