<?php

include '../model/Pays.php';


class PaysC
{
    public function __construct()
    {
        if (session_status() === PHP_SESSION_NONE) {
            session_start();
        }
    }

   
    public function incrementLikes($id)
    {
        if (!$this->hasLiked($id)) {
            // Mettre à jour les données en session
            $_SESSION['likes'][$id] = true;

            // Mettre à jour les données en base de données
            $this->updateLikesInDatabase($id, true);
        }
    }

    public function incrementDislikes($id)
    {
        if (!$this->hasDisliked($id)) {
            // Mettre à jour les données en session
            $_SESSION['dislikes'][$id] = true;

            // Mettre à jour les données en base de données
            $this->updateDislikesInDatabase($id, true);
        }
    }
    public function hasLiked($id)
{
    if (isset($_SESSION['likes'][$id])) {
        return true;
    } else {
        return false;
    }
}
public function hasDisliked($id)
{
    if (isset($_SESSION['dislikes'][$id])) {
        return true;
    } else {
        return false;
    }
}

    // Méthode pour mettre à jour les likes dans la base de données
    private function updateLikesInDatabase($id, $increment)
    {
        $sql = "UPDATE pays SET likes = likes " . ($increment ? "+ 1" : "- 1") . " WHERE id = :id";
        $db = config::getConnexion();
        $query = $db->prepare($sql);
        $query->bindParam(':id', $id);
        $query->execute();
    }

    // Méthode pour mettre à jour les dislikes dans la base de données
    private function updateDislikesInDatabase($id, $increment)
    {
        $sql = "UPDATE pays SET dislikes = dislikes " . ($increment ? "+ 1" : "- 1") . " WHERE id = :id";
        $db = config::getConnexion();
        $query = $db->prepare($sql);
        $query->bindParam(':id', $id);
        $query->execute();
    }
    public function listPaysSortedByName()
    {
        $Pays = $this->listPays();

        // Fonction de comparaison pour trier les pays par nom
        function compareByName($a, $b)
        {
            return strcmp($a['NomP'], $b['NomP']);
        }

        // Tri du tableau $Pays par ordre alphabétique
        usort($Pays, 'compareByName');

        return $Pays;
    }

    public function searchPaysByContinent($Continent)
    {
        $sql = "SELECT * FROM pays WHERE Continent = :Continent";
        $db = config::getConnexion();
        $query = $db->prepare($sql);
        $query->bindParam(':Continent', $Continent);
        $query->execute();
        return $query->fetchAll(PDO::FETCH_ASSOC);
    }

    public function searchPaysByLang($lang)
    {
        $sql = "SELECT p.*, d.Langue FROM pays p JOIN descript d ON p.id = d.id WHERE d.Langue LIKE :lang";
        $db = config::getConnexion();
        $query = $db->prepare($sql);
        $query->bindValue(':lang', '%' . $lang . '%');
        $query->execute();
        return $query->fetchAll(PDO::FETCH_ASSOC);
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
        $sql = "SELECT id, NomP, image, likes, dislikes,Continent FROM pays";
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
        $sql = "INSERT INTO pays VALUES (NULL, :NomP, :image, 0, 0,:Continent)";
        $db = config::getConnexion();
        try {
            $query = $db->prepare($sql);
            $query->execute([
                'NomP' => $Pays->getNomP(),
                'image' => $Pays->getImage(),
                'Continent' => $Pays->getContinent(),
            ]);
        } catch (Exception $e) {
            echo 'Error: ' . $e->getMessage();
        }
    }

    // Méthode pour mettre à jour un pays
    public function updatePays($id, $nomP, $image, $Continent)
    {
        try {
            $db = config::getConnexion();
            $sql = "UPDATE pays SET NomP=:nomP, image=:image,Continent=:Continent WHERE id=:id";

            $query = $db->prepare($sql);
            $query->bindParam(':id', $id);
            $query->bindParam(':nomP', $nomP);
            $query->bindParam(':image', $image);
            $query->bindParam(':Continent', $Continent);
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
    public function getCommentsByPaysId($id_pays)
    {
        $sql = "SELECT * FROM comment WHERE id_pays = :id_pays";
        $db = config::getConnexion();
        $query = $db->prepare($sql);
        $query->bindParam(':id_pays', $id_pays);
        $query->execute();
        return $query->fetchAll(PDO::FETCH_ASSOC);
    }
    public function getTop4PaysByLikes()
    {
        $sql = "SELECT *, (likes / (likes + dislikes)) AS ratio FROM pays ORDER BY ratio DESC LIMIT 4";
        $db = config::getConnexion();
        $query = $db->prepare($sql);
        $query->execute();
        return $query->fetchAll(PDO::FETCH_ASSOC);
    }
}