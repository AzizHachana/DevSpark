<?php
//include '../config.php';
include_once __DIR__ . '/../config.php';
include '../model/Reservation.php';
include '../phpqrcode/qrlib.php';
class ReservationC
{
    public function ajouterReservationH($reservation,$user_id)
    {
        $sql = "INSERT INTO reservationh VALUES (NULL,  :DDP,   :DDA, :Adultes, :Enfants, :Chambres, :hotel_id, :user_id )";
    
        $db = Config::getConnexion();
        try {
            $query = $db->prepare($sql);
            $query->execute([
                'DDP' => $reservation->getDDP(),
                'DDA' => $reservation->getDDA(),
                'Adultes' => $reservation->getAdultes(),
                'Enfants' => $reservation->getEnfants(),
                'Chambres' => $reservation->getChambres(),
                'hotel_id' => $reservation->getHotelId(),
                'user_id' =>  $user_id
                //'qr_code_link' => $reservation->getcode_qr() // Ajout de l'ID de l'hôtel
            ]);
            echo "Réservation ajoutée avec succès.";
        } catch (Exception $e) {
            echo 'Error: ' . $e->getMessage();
        }
    }  
    public function ajouterreservation($reservation)
    {
        $sql = "INSERT INTO reservationh VALUES (NULL,  :DDP,   :DDA, :Adultes, :Enfants, :Chambres, :hotel_id, :user_id )";
    
        $db = Config::getConnexion();
        try {
            $query = $db->prepare($sql);
            $query->execute([
                'DDP' => $reservation->getDDP(),
                'DDA' => $reservation->getDDA(),
                'Adultes' => $reservation->getAdultes(),
                'Enfants' => $reservation->getEnfants(),
                'Chambres' => $reservation->getChambres(),
                'hotel_id' => $reservation->getHotelId(),
                'user_id' => $reservation->getuserId()
                //'qr_code_link' => $reservation->getcode_qr() // Ajout de l'ID de l'hôtel
            ]);
            echo "Réservation ajoutée avec succès.";
        } catch (Exception $e) {
            echo 'Error: ' . $e->getMessage();
        }
    }
    public function listreservations()
    {
        $sql = "SELECT * FROM reservationh";
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
        // Supprimer d'abord les enregistrements liés dans d'autres tables si nécessaire
        // Par exemple, supprimer les enregistrements dans les tables liées à la réservation (utilisateurs, hôtels, etc.)
        // Assurez-vous de respecter l'ordre de suppression pour éviter les violations de contraintes de clés étrangères
    
        try {
            // Supprimer la réservation de la table reservation
            $sql = "DELETE FROM reservationh WHERE id = :id";
            $db = Config::getConnexion();
            $req = $db->prepare($sql);
            $req->bindValue(':id', $id);
            $req->execute();
    
            // Vérifier si des lignes ont été affectées
            if ($req->rowCount() > 0) {
                return true; // La suppression a réussi
            } else {
                return false; // Aucune ligne supprimée, peut-être que l'ID de réservation était invalide
            }
        } catch (PDOException $e) {
            // Gérer les erreurs de suppression
            error_log("Erreur lors de la suppression de la réservation : " . $e->getMessage());
            return false;
        }
    }
    
    function deleteres($id)
    {
         

        $sql = "DELETE FROM 'reservationh' WHERE `reservation`.`id` = :id";
        $conn = config::getConnexion();
        $req = $conn->prepare($sql);
        $req->bindValue(':id', $id);

        try {
            $req->execute();
        } catch (Exception $e) {
            die('Error:' . $e->getMessage());
        }
    }

    public function listreservation()
    {
        $sql = "SELECT * FROM reservationh";
        $db = Config::getConnexion();
        try {
            $stmt = $db->query($sql);
            $data = $stmt->fetchAll(PDO::FETCH_ASSOC);
            return $data;
        } catch (Exception $e) {
            die('Error:' . $e->getMessage());
        }
    }
    public function updatereservation($id, $DDP, $DDA, $Adultes, $Enfants, $Chambres)
{
    $db = config::getConnexion();
    try {
        // Définir la requête SQL
        $sql = "UPDATE reservationh SET DDP = :DDP, DDA = :DDA, Adultes = :Adultes, Enfants = :Enfants, Chambres = :Chambres WHERE id = :id";
        
        // Préparer la requête SQL
        $query = $db->prepare($sql);
        
        // Binder les paramètres
        $query->bindParam(':id', $id);
        $query->bindParam(':DDP', $DDP);
        $query->bindParam(':DDA', $DDA);
        $query->bindParam(':Adultes', $Adultes);
        $query->bindParam(':Enfants', $Enfants);
        $query->bindParam(':Chambres', $Chambres);
        
        // Exécuter la requête
        $query->execute();
        
        echo $query->rowCount() . " enregistrements mis à jour avec succès";
    } catch (Exception $e) {
        die('Erreur: ' . $e->getMessage());
    }
}

        public function affichereservation($id) {
        try {
        $pdo = config::getConnexion();
        $query = $pdo->prepare("SELECT * FROM reservationh WHERE hotel_id = :id");
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
        public function getreservation($id) 
        {
            // Assurez-vous d'utiliser une requête SQL sécurisée pour éviter les injections SQL
            $sql = "SELECT * FROM reservationh WHERE id = :id";
            $db = config::getConnexion();
            $query = $db->prepare($sql);
            $query->bindParam(':id', $id);
            $query->execute();
            return $query->fetch(PDO::FETCH_ASSOC);
        }
      }
        
