<?php
include '../model/Commentaire.php';

class CommentaireC
{
    public function __construct($condition = false)
{
    if ((session_status() === PHP_SESSION_NONE)) {
        session_start();
    }
}


    public function incrementCommentLike($id_com)
    {
        if (!$this->hasCommentLiked($id_com)) {
            // Mettre à jour les données en session
            $_SESSION['nbre_like'][$id_com] = true;
    
            // Mettre à jour les données en base de données
            $this->updateLikesInDatabase($id_com, true); // Utilisez la méthode existante pour incrémenter les likes en base de données
        }
    }

    private function updateLikesInDatabase($id_com, $increment)
    {
        $sql = "UPDATE comment SET nbre_like = nbre_like " . ($increment ? "+ 1" : "- 1") . " WHERE id_com = :id_com";
        $db = config::getConnexion();
        $query = $db->prepare($sql);
        $query->bindParam(':id_com', $id_com);
        $query->execute();
    }
    
    public function hasCommentLiked($id_com)
    {
        if (isset($_SESSION['nbre_like'][$id_com])) {
            return true;
        } else {
            return false;
        }
    }

    function getLikesCount($id_com)
    {
        $sql = "SELECT nbre_like FROM comment WHERE id_com = :id_com";
        $db = config::getConnexion();

        try {
            $query = $db->prepare($sql);
            $query->bindParam(':id_com', $id_com, PDO::PARAM_INT);
            $query->execute();
            $result = $query->fetchColumn();
            return $result;
        } catch (Exception $e) {
            echo 'Error: ' . $e->getMessage();
        }
    }
    
    
    public function getNewCommentsNotifications() {
        $sql = "SELECT comment.id_com, comment.Date_commentaire, unityuser.nom, unityuser.prenom, pays.NomP 
                FROM comment 
                INNER JOIN unityuser ON comment.id_user = unityuser.id 
                INNER JOIN pays ON comment.id_pays = pays.id 
                WHERE comment.Date_commentaire >= DATE_SUB(NOW(), INTERVAL 1 DAY) 
                ORDER BY comment.Date_commentaire DESC LIMIT 10"; // Vous pouvez ajuster la limite selon vos besoins
        $db = config::getConnexion(); 
        
        try {
            $query = $db->prepare($sql);
            $query->execute();
            $notifications = array();
            
            while ($row = $query->fetch(PDO::FETCH_ASSOC)) {
                $notification = array(
                    'id_com' => $row['id_com'],
                    'nom' => $row['nom'],
                    'prenom' => $row['prenom'],
                    'NomP' => $row['NomP'],
                    'elapsed_time' => $this->formatElapsedTime($row['Date_commentaire'])
                );
                $notifications[] = $notification;
            }
            
            return $notifications;
        } catch (PDOException $e) {
            die('Error: ' . $e->getMessage());
        }
    }
    
    
    private function formatElapsedTime($date) {
        $now = new DateTime();
        $commentDate = new DateTime($date);
        $interval = $now->diff($commentDate);
        $hours = $interval->h + ($interval->days * 24);
        
        if ($hours < 1) {
            return "Envoyé il y a moins d'une heure";
        } elseif ($hours < 24) {
            return "Envoyé il y a " . $hours . " heures";
        } else {
            return "Envoyé il y a plus d'un jour";
        }
    }
    
    
    public function listCommentaireByPaysId($id_pays)
{
    $sql = "SELECT * FROM comment WHERE id_pays = :id_pays";
    $db = config::getConnexion();
    $query = $db->prepare($sql);
    $query->bindParam(":id_pays", $id_pays, PDO::PARAM_INT);
    try {
        $query->execute();
        return $query->fetchAll(PDO::FETCH_ASSOC);
    } catch (PDOException $e) {
        die('Error: ' . $e->getMessage());
    }
}
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
        $sql = "INSERT INTO comment (id_pays, Commentaire, id_user, nbre_like) VALUES (:id_pays, :Commentaire, :id_user, :nbre_like)";
        $db = config::getConnexion();
        try {
            $query = $db->prepare($sql);
            $query->execute([
                'id_pays' => $Commentaire->getIdPays(),
                'Commentaire' => $Commentaire->getCommentaire(),
                'id_user' => $Commentaire->getIdUser(),
                'nbre_like' => $Commentaire->getNbre_Like() // Ajoutez le nombre de likes ici
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
