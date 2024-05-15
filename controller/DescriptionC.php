<?php
include '../model/Description.php';

class DescriptionC
{
    public function listDescription()
    {
        $sql = "SELECT * FROM descript";
        $db = config::getConnexion();
        try {
            $stmt = $db->query($sql);
            $data = $stmt->fetchAll(PDO::FETCH_ASSOC);
            return $data;
        } catch (Exception $e) {
            die('Error:' . $e->getMessage());
        }
    }

    public function deleteDescription($id)
    {
        $sql = "DELETE FROM descript WHERE id = :id";
        $db = config::getConnexion();
        $req = $db->prepare($sql);
        $req->bindValue(':id', $id);

        try {
            $req->execute();
        } catch (Exception $e) {
            die('Error:' . $e->getMessage());
        }
    }

    public function ajouterDescription($Description)
    {
        $sql = "INSERT INTO descript VALUES (:id, :Capitale, :Climat, :Langue, :Monnaie, :Attractions_touristiques, :Activites)";
        $db = config::getConnexion();
        try {
            $query = $db->prepare($sql);
            $query->execute([
                'id' => $Description->getId(),
                'Capitale' => $Description->getCapitale(),
                'Climat' => $Description->getClimat(),
                'Langue' => $Description->getLangue(),
                'Monnaie' => $Description->getMonnaie(),
                'Attractions_touristiques' => $Description->getAttractions(), // Correction ici
                'Activites' => $Description->getActivites(),
            ]);
            echo "Description ajoutée avec succès.";
        } catch (Exception $e) {
            echo 'Error: ' . $e->getMessage();
        }
    }

    public function updateDescription($id, $Capitale, $Climat, $Langue, $Monnaie, $Attractions_touristiques, $Activites)
    {
        $sql = "UPDATE descript SET Capitale=:Capitale, Climat=:Climat, Langue=:Langue, Monnaie=:Monnaie, Attractions_touristiques=:Attractions_touristiques, Activites=:Activites WHERE id=:id";
        $db = config::getConnexion();
        try {
            $query = $db->prepare($sql);
            $query->bindParam(':id', $id);
            $query->bindParam(':Capitale', $Capitale);
            $query->bindParam(':Climat', $Climat);
            $query->bindParam(':Langue', $Langue);
            $query->bindParam(':Monnaie', $Monnaie);
            $query->bindParam(':Attractions_touristiques', $Attractions_touristiques);
            $query->bindParam(':Activites', $Activites);

            $query->execute();
        } catch (Exception $e) {
            die('Error: ' . $e->getMessage());
        }
    }




    public function getDescriptById($id)
    {
        $sql = "SELECT * FROM descript WHERE id = :id";
        $db = config::getConnexion();
        $query = $db->prepare($sql);
        $query->bindParam(':id', $id);
        $query->execute();
        return $query->fetch(PDO::FETCH_ASSOC);
    }

    public function getDescript($id)
    {
        $sql = "SELECT * FROM descript WHERE id = :id";
        $db = config::getConnexion();
        $query = $db->prepare($sql);
        $query->bindParam(':id', $id);
        $query->execute();
        return $query->fetch(PDO::FETCH_ASSOC);
    }
}
