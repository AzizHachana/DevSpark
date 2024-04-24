<?php

include '../model/Pays.php';


class PaysC
{

    public function incrementLikes($id)
    {
        $sql = "UPDATE pays SET likes = likes + 1 WHERE id = :id";
        $db = config::getConnexion();
        try {
            $query = $db->prepare($sql);
            $query->bindParam(':id', $id);
            $query->execute();
        } catch (Exception $e) {
            echo 'Error: ' . $e->getMessage();
        }
    }

    public function incrementDislikes($id)
    {
        $sql = "UPDATE pays SET dislikes = dislikes + 1 WHERE id = :id";
        $db = config::getConnexion();
        try {
            $query = $db->prepare($sql);
            $query->bindParam(':id', $id);
            $query->execute();
        } catch (Exception $e) {
            echo 'Error: ' . $e->getMessage();
        }
    }

    function getLikesCount($id)
    {
        $sql = "SELECT likes FROM pays WHERE id = :id";
        $db = config::getConnexion();

        try {
            $query = $db->prepare($sql);
            $query->bindParam(':id', $id, PDO::PARAM_INT);
            $query->execute();
            $result = $query->fetchColumn();
            return $result;
        } catch (Exception $e) {
            echo 'Error: ' . $e->getMessage();
        }
    }

    function getDislikesCount($id)
    {
        $sql = "SELECT dislikes FROM pays WHERE id = :id";
        $db = config::getConnexion();

        try {
            $query = $db->prepare($sql);
            $query->bindParam(':id', $id, PDO::PARAM_INT);
            $query->execute();
            $result = $query->fetchColumn();
            return $result;
        } catch (Exception $e) {
            echo 'Error: ' . $e->getMessage();
        }
    }


    public function searchPays($nomP)
    {
        $sql = "SELECT * FROM pays WHERE NomP LIKE :nomP";
        $db = config::getConnexion();
        $query = $db->prepare($sql);
        $query->bindValue(':nomP', '%' . $nomP . '%');
        $query->execute();
        return $query->fetchAll(PDO::FETCH_ASSOC);
    }

    public function listPays()
    {
        $sql = "SELECT id, NomP, image, likes, dislikes FROM pays";
        $db = config::getConnexion();
        try {
            $stmt = $db->query($sql);
            $data = $stmt->fetchAll(PDO::FETCH_ASSOC);
            return $data;
        } catch (Exception $e) {
            die('Error:' . $e->getMessage());
        }
    }


    public function deletePays($id)
    {
        $sql = "DELETE FROM pays WHERE id = :id";
        $db = config::getConnexion();
        $req = $db->prepare($sql);
        $req->bindValue(':id', $id);

        try {
            $req->execute();
        } catch (Exception $e) {
            die('Error:' . $e->getMessage());
        }
    }


    public function ajouterPays($Pays)
    {
        $sql = "INSERT INTO pays VALUES (NULL, :NomP, :image, 0, 0)";
        $db = config::getConnexion();
        try {
            $query = $db->prepare($sql);
            $query->execute([
                'NomP' => $Pays->getNomP(),
                'image' => $Pays->getImage(),
            ]);
        } catch (Exception $e) {
            echo 'Error: ' . $e->getMessage();
        }
    }

    // Méthode pour mettre à jour un professeur
    public function updatePays($id, $nomP, $image)
    {
        try {
            $db = config::getConnexion();
            $sql = "UPDATE pays SET NomP=:nomP, image=:image WHERE id=:id";

            $query = $db->prepare($sql);
            $query->bindParam(':id', $id);
            $query->bindParam(':nomP', $nomP);
            $query->bindParam(':image', $image);
            $query->execute();
        } catch (Exception $e) {
            throw new Exception('Error: ' . $e->getMessage());
        }
    }


    public function getPaysById($id)
    {
        $sql = "SELECT * FROM pays WHERE id= :id";
        $db = config::getConnexion();
        $query = $db->prepare($sql);
        $query->bindParam(':id', $id);
        $query->execute();
        return $query->fetch(PDO::FETCH_ASSOC);
    }

    public function getPays($id)
    {
        // Assurez-vous d'utiliser une requête SQL sécurisée pour éviter les injections SQL
        $sql = "SELECT * FROM pays WHERE id = :id";
        $db = config::getConnexion();
        $query = $db->prepare($sql);
        $query->bindParam(':id', $id);
        $query->execute();
        return $query->fetch(PDO::FETCH_ASSOC);
    }
}