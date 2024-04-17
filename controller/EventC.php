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
    public function updateEvent($id, $nom, $dateE, $lieu,$descriptionE, $prix,$image)
    {
        $sql = "UPDATE events SET Nom=:nom, DateE=:dateE, Lieu=:lieu, DescriptionE=:descriptionE, Prix=:prix, image=:image WHERE id=:id";
        $db = config::getConnexion();
        try {
            $query = $db->prepare($sql);
            $query->bindParam(':id', $id);
            $query->bindParam(':nom', $nom);
            $query->bindParam(':dateE', $dateE);
            $query->bindParam(':lieu', $lieu);
            $query->bindParam(':descriptionE', $descriptionE);
            $query->bindParam(':prix', $prix);
            $query->bindParam(':image', $image);

            $query->execute();
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

    public function getEvent($id) 
    {
        // Assurez-vous d'utiliser une requête SQL sécurisée pour éviter les injections SQL
        $sql = "SELECT * FROM events WHERE id = :id";
        $db = config::getConnexion();
        $query = $db->prepare($sql);
        $query->bindParam(':id', $id);
        $query->execute();
        return $query->fetch(PDO::FETCH_ASSOC);
    }
}
?>
