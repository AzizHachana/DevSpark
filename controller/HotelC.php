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
        $sql = "INSERT INTO hotel VALUES (NULL, :Nom, :Adresse, :Ville, :Code_postal, :Pays, :Tel, :Email, :image )";
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
                //'Description'=>$hotel->getDescription()
                //'image' => $hotel->getetoile()
            ]);
            echo "Hotel ajouté avec succès.";
        } catch (Exception $e) {
            echo 'Error: ' . $e->getMessage();
        }
    }
    
    

   public function updatehotel($id, $nom, $adresse, $ville, $code_postal,$pays,$tel,$email,$image)
{
    $sql = "UPDATE hotel SET Nom=:nom, Adresse=:adresse, Ville=:ville, Code_postal=:code_postal , Pays=:pays ,Tel=:tel,Email=:email, image=:image WHERE id=:id";
    $db = config::getConnexion();
    try {
        $query = $db->prepare($sql);
        $query->bindParam(':id', $id);
        $query->bindParam(':nom', $nom);
        $query->bindParam(':adresse', $adresse);
        $query->bindParam(':ville', $ville);
        $query->bindParam(':code_postal', $code_postal);
        $query->bindParam(':pays', $pays);
        $query->bindParam(':tel', $tel);
        $query->bindParam(':email', $email);
        $query->bindParam(':image', $image);
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





}
?>
