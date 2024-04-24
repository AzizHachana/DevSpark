<?php
//include '../config.php';
include_once __DIR__ . '/../config.php';
include '../Model/Reservation.php';
class ReservationC
{
    public function ajouterreservation($reservation)
    {
        $sql = "INSERT INTO reservation VALUES (NULL,  :DDP,   :DDA, :Adultes, :Enfants, :Chambres, :hotel_id)";
    
        $db = Config::getConnexion();
        try {
            $query = $db->prepare($sql);
            $query->execute([
                'DDP' => $reservation->getDDP(),
                'DDA' => $reservation->getDDA(),
                'Adultes' => $reservation->getAdultes(),
                'Enfants' => $reservation->getEnfants(),
                'Chambres' => $reservation->getChambres(),
                'hotel_id' => $reservation->getHotelId() // Ajout de l'ID de l'hôtel
            ]);
            echo "Réservation ajoutée avec succès.";
        } catch (Exception $e) {
            echo 'Error: ' . $e->getMessage();
        }
    }
    public function listreservations()
    {
        $sql = "SELECT * FROM reservation";
        $db = Config::getConnexion();
        try {
            $stmt = $db->query($sql);
            $data = $stmt->fetchAll(PDO::FETCH_ASSOC);
            return $data;
        } catch (Exception $e) {
            die('Error:' . $e->getMessage());
        }
    }
    public function deletereservation($id)
    {
        $sql = "DELETE FROM reservation WHERE id = :id";
        $db = Config::getConnexion();
        $req = $db->prepare($sql);
        $req->bindValue(':id', $id);

        try {
            $req->execute();
        } catch (Exception $e) {
            die('Error:' . $e->getMessage());
        }
    }
        public function affichereservation($id) {
        try {
        $pdo = config::getConnexion();
        $query = $pdo->prepare("SELECT * FROM reservation WHERE hotel_id = :id");
        $query->execute(['id' => $id]);
        return $query->fetchAll();
        } catch (PDOException $e) 
      {
        echo $e->getMessage();
      }
    }
        
        public function afficherhotel() {
        try {
        $pdo = config::getConnexion();
        $query = $pdo->prepare("SELECT * FROM hotel");
        $query->execute();
        return $query->fetchAll();
        } catch (PDOException $e) {
        echo $e->getMessage();
    }    
        }
      }
        
