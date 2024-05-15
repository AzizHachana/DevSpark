<?php
include '../config.php'; // Inclure le fichier config.php
include '../Model/Event.php'; // Inclure le fichier Hotel.php

class EventC
{
    public function listEvents()
    {
        $sql = "SELECT * FROM events";
        $db = Config::getConnexion();
        try {
            $stmt = $db->query($sql);
            $data = $stmt->fetchAll(PDO::FETCH_ASSOC);
            return $data;
        } catch (Exception $e) {
            die('Error:' . $e->getMessage());
        }
    }

    public function deleteEvent($id)
    {
        $sql = "DELETE FROM events WHERE id = :id";
        $db = Config::getConnexion();
        $req = $db->prepare($sql);
        $req->bindValue(':id', $id);

        try {
            $req->execute();
        } catch (Exception $e) {
            die('Error:' . $e->getMessage());
        }
    }

    public function ajouterEvent($event)
    {
        $sql = "INSERT INTO events VALUES (NULL, :Nom, :DateE, :Lieu, :DescriptionE, :Prix,:image)";
        $db = Config::getConnexion();
        try {
            $query = $db->prepare($sql);
            $query->execute([
                'Nom' => $event->getNom(),
                'DateE' => $event->getDate(),
                'Lieu' => $event->getLieu(),
                'DescriptionE' => $event->getDescription(),
                'Prix' => $event->getPrix(),
                'image' => $event->getImage()
            ]);
            echo "Hotel ajouté avec succès.";
        } catch (Exception $e) {
            echo 'Error: ' . $e->getMessage();
        }
    }
    public function updateEvent($id, $nom, $date, $lieu, $description, $prix,$image)
    {
        $db = config::getConnexion();
        try {
            if (!empty($image)) { // Si une nouvelle image est fournie
                $sql = "UPDATE events SET Nom=:Nom,DateE=DateE,Lieu=Lieu,DescriptionE=DescriptionE,Prix=Prix, ?image=:image WHERE id=:id";
            } else { // Si aucune nouvelle image n'est fournie
                // Récupérer l'image existante à partir de la base de données
                $existingImage = $this->getEventById($id)['image'];
                $sql = "UPDATE events SET Nom=:Nom,DateE=DateE,Lieu=Lieu,DescriptionE=DescriptionE,Prix=Prix,image=:existingImage WHERE id=:id";
            }

            $query = $db->prepare($sql);
            $query->bindParam(':id', $id);
            $query->bindParam(':Nom', $nom);
            $query->bindParam(':Date', $date);
            $query->bindParam(':Lieu', $Lieu);
            $query->bindParam(':DescriptionE', $description);
            $query->bindParam(':Prix', $prix);
            if (!empty($image)) { // Si une nouvelle image est fournie
                $query->bindParam(':image', $image);
            } else { // Si aucune nouvelle image n'est fournie
                $query->bindParam(':existingImage', $existingImage);
            }

            $query->execute();
            echo $query->rowCount() . " records updated successfully";
        } catch (Exception $e) {
            die('Error: ' . $e->getMessage());
        }
    }
    public function getEventById($id)
    {
        $sql = "SELECT * FROM events WHERE id = :id";
        $db = config::getConnexion();
        $query = $db->prepare($sql);
        $query->bindParam(':id', $id);
        $query->execute();
        return $query->fetch(PDO::FETCH_ASSOC);
    }


}
?>
