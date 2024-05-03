<?php
include '../model/Commentaire.php';

class CommentaireC
{
    public function listCommentaire()
    {
        $sql = "SELECT * FROM comment";
        $db = config::getConnexion();
        try {
            $stmt = $db->query($sql);
            $data = $stmt->fetchAll(PDO::FETCH_ASSOC);
            return $data;
        } catch (Exception $e) {
            die('Error:' . $e->getMessage());
        }
    }

    public function deleteCommentaire($id_com)
    {
        $sql = "DELETE FROM comment WHERE id_com = :id_com";
        $db = config::getConnexion();
        $req = $db->prepare($sql);
        $req->bindValue(':id_com', $id_com);

        try {
            $req->execute();
        } catch (Exception $e) {
            die('Error:' . $e->getMessage());
        }
    }


    public function ajouterCommentaire($Commentaire)
    {
        $sql = "INSERT INTO comment (id_pays, Commentaire, id_user) VALUES (:id_pays, :Commentaire, :id_user)";
        $db = config::getConnexion();
        try {
            $query = $db->prepare($sql);
            $query->execute([
                'id_pays' => $Commentaire->getIdPays(),
                'Commentaire' => $Commentaire->getCommentaire(),
                'id_user' => $Commentaire->getIdUser(),
            ]);
            echo "Commentaire ajouté avec succès.";
        } catch (Exception $e) {
            echo 'Error: ' . $e->getMessage();
        }
    }


    public function updateCommentaire($id_com, $Commentaire)
{
    $sql = "UPDATE comment SET Commentaire=:Commentaire WHERE id_com=:id_com";
    $db = config::getConnexion();
    try {
        $query = $db->prepare($sql);
        $query->bindParam(':id_com', $id_com);
        $query->bindParam(':Commentaire', $Commentaire);

        $query->execute();
    } catch (Exception $e) {
        die('Error: ' . $e->getMessage());
    }
}




    public function getCommentById($id_com)
    {
        $sql = "SELECT * FROM comment WHERE id_com = :id_com";
        $db = config::getConnexion();
        $query = $db->prepare($sql);
        $query->bindParam(':id_com', $id_com);
        $query->execute();
        return $query->fetch(PDO::FETCH_ASSOC);
    }

    public function getComment($id_com)
    {
        $sql = "SELECT * FROM comment WHERE id_com = :id_com";
        $db = config::getConnexion();
        $query = $db->prepare($sql);
        $query->bindParam(':id_com', $id);
        $query->execute();
        return $query->fetch(PDO::FETCH_ASSOC);
    }

    public function getCommentByPaysId($id_pays)
    {
        $sql = "SELECT * FROM comment WHERE id_pays = :id_pays";
        $db = config::getConnexion();
        $query = $db->prepare($sql);
        $query->bindParam(":id_pays", $id_pays, PDO::PARAM_INT);
        $query->execute();
        return $query->fetchAll(PDO::FETCH_ASSOC); // Retourne un tableau de commentaires
    }

    public function getUserById($id_user)
    {
        $sql = "SELECT * FROM unityuser WHERE id = :id";
        $db = config::getConnexion();
        try {
            $query = $db->prepare($sql);
            $query->bindParam(":id", $id_user);
            $query->execute();
            return $query->fetch(PDO::FETCH_ASSOC);
        } catch (PDOException $e) {
            $e->getMessage();
        }
    }
}
