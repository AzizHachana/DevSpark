<?php
include '../config.php';
include '../controller/CommentaireC.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        $id_com = $_POST['id_com'];

        $Commentaire = new CommentaireC();
        if (!$Commentaire->hasCommentLiked($id_com)) {
            $Commentaire->incrementCommentLike($id_com);
            echo $Commentaire->getLikesCount($id_com); // Renvoie le nombre total de likes après l'incrémentation
        } else {
            echo "You have already liked this comment.";
        }
    }

?>