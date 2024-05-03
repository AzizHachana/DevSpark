<?php
//include '../config.php'; // Inclure le fichier config.php
include '../Model/Hotel.php'; // Inclure le fichier Hotel.php
include_once __DIR__ . '/../config.php';
class HotelC
{
    public function listHotels()
    {
        $sql = "SELECT * FROM hotel";
        $db = Config::getConnexion();
        try {
            $stmt = $db->query($sql);
            $data = $stmt->fetchAll(PDO::FETCH_ASSOC);
            return $data;
        } catch (Exception $e) {
            die('Error:' . $e->getMessage());
        }
    }

    public function deleteHotel($id)
    {
        $sql = "DELETE FROM hotel WHERE id = :id";
        $db = Config::getConnexion();
        $req = $db->prepare($sql);
        $req->bindValue(':id', $id);

        try {
            $req->execute();
        } catch (Exception $e) {
            die('Error:' . $e->getMessage());
        }
    }

    public function ajouterHotel($hotel)
    {
        $sql = "INSERT INTO hotel VALUES (NULL, :Nom, :Adresse, :Ville, :Code_postal, :Pays, :Tel, :Email, :image, :Description, 0, 0 )";
        $db = Config::getConnexion();
        try {
            $query = $db->prepare($sql);
            $query->execute([
                'Nom' => $hotel->getNom(),
                'Adresse' => $hotel->getAdresse(),
                'Ville' => $hotel->getVille(),
                'Code_postal' => $hotel->getCodePostal(),
                'Pays' => $hotel->getPays(),
                'Tel' => $hotel->getTelephone(), // Utilisation de la méthode getTelephone() pour récupérer le numéro de téléphone
                'Email' => $hotel->getEmail(),
                'image' => $hotel->getImage(),
                'Description'=>$hotel->getDescription(),
                //'image' => $hotel->getetoile()
            ]);
            echo "Hotel ajouté avec succès.";
        } catch (Exception $e) {
            echo 'Error: ' . $e->getMessage();
        }
    }
    
    

    public function updatehotel($id, $nom, $adresse, $ville, $code_postal, $pays, $tel, $email, $image, $description)
    {
        $db = config::getConnexion();
        try {
            // Define your SQL query
            $sql = "UPDATE hotel SET nom = :nom, adresse = :adresse, ville = :ville, code_postal = :code_postal, pays = :pays, tel = :tel, email = :email, image = :image, description = :description WHERE id = :id";
            
            // Prepare the SQL query
            $query = $db->prepare($sql);
            
            // Bind parameters
            $query->bindParam(':id', $id);
            $query->bindParam(':nom', $nom);
            $query->bindParam(':adresse', $adresse);
            $query->bindParam(':ville', $ville);
            $query->bindParam(':code_postal', $code_postal);
            $query->bindParam(':pays', $pays);
            $query->bindParam(':tel', $tel);
            $query->bindParam(':email', $email);
            $query->bindParam(':image', $image);
            $query->bindParam(':description', $description);
            
            // Execute the query
            $query->execute();
            
            echo $query->rowCount() . " records updated successfully";
        } catch (Exception $e) {
            die('Error: ' . $e->getMessage());
        }
    }
    
    
public function getHotelById($id)
    {
        $sql = "SELECT * FROM hotel WHERE id = :id";
        $db = config::getConnexion();
        $query = $db->prepare($sql);
        $query->bindParam(':id', $id);
        $query->execute();
        return $query->fetch(PDO::FETCH_ASSOC);
    }

    public function gethotel($id) 
    {
        // Assurez-vous d'utiliser une requête SQL sécurisée pour éviter les injections SQL
        $sql = "SELECT * FROM hotel WHERE id = :id";
        $db = config::getConnexion();
        $query = $db->prepare($sql);
        $query->bindParam(':id', $id);
        $query->execute();
        return $query->fetch(PDO::FETCH_ASSOC);
    }
    // Dans HotelC.php

// Dans HotelC.php

public function chercherHotels($query) {
    $db = config::getConnexion();
    $stmt = $db->prepare("SELECT * FROM hotel WHERE Nom LIKE ? OR Adresse LIKE ? OR Ville LIKE ?");
    $stmt->execute(["%$query%", "%$query%", "%$query%"]);
    $hotels = $stmt->fetchAll();
    return $hotels;
}
public function showMap() {
    $mapModel = new MapModel();
    $locationData = $mapModel->getLocationData();
    require_once 'view/map_view.php';
}
public function incrementLikes($id)
    {
        $sql = "UPDATE hotel SET likes = likes + 1 WHERE id = :id";
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
        $sql = "UPDATE hotel SET dislikes = dislikes + 1 WHERE id = :id";
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
        $sql = "SELECT likes FROM hotel WHERE id = :id";
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
        $sql = "SELECT dislikes FROM hotel WHERE id = :id";
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

}
class Map {
    private $db;

    public function __construct() {
        $this->db = new Database;
    }

    public function getMapMarkers() {
        $this->db->query('SELECT * FROM maps');
        $results = $this->db->resultSet();
        return $results;
    }

    public function getMarkerByLocation($location) {
        $this->db->query('SELECT * FROM maps WHERE location = :location');
        $this->db->bind(':location', $location);
        $results = $this->db->single();
        return $results;
    }
}
?>
