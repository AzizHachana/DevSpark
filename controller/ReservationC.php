<?php
include '../config.php'; // Inclure le fichier config.php
include '../Model/Reservation.php'; // Inclure le fichier Hotel.php

class ReservationC
{
    public function listReservation()
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

    public function deleteReservation($id)
    {
        $sql = "DELETE FROM reservation WHERE id_r = :id_r";
        $db = Config::getConnexion();
        $req = $db->prepare($sql);
        $req->bindValue(':id_r', $id);

        try {
            $req->execute();
        } catch (Exception $e) {
            die('Error:' . $e->getMessage());
        }
    }

    public function ajouterReservation($event)
    {
        $sql = "INSERT INTO reservation VALUES (NULL, :date_check_in, :date_check_out, :nbr_p, :status, :id_e)";
        $db = Config::getConnexion();
        try {
            $query = $db->prepare($sql);
            $query->execute([
                'date_check_in' => $Reservation->getdate_in(),
                'date_check_out' => $Reservation->getDate_out(),
                'nbr_p' => $Reservation->getnbr(),
                'status' => $Reservation->getstatus(),
                'id_e' => $Reservation->getId_e(),
            ]);
            echo "Hotel ajouté avec succès.";
        } catch (Exception $e) {
            echo 'Error: ' . $e->getMessage();
        }
    }
    public function updateEvent($id_r,$date_check_in,$date_check_out,$nbr_p,$status,$id_e)
    {
        $sql = "UPDATE events SET date_check_in=:date_check_in, date_check_out=:date_check_out, nbr_p=:nbr_p, status=:status, id_e=:id_e WHERE id_r=:id_r";
        $db = config::getConnexion();
        try {
            $query = $db->prepare($sql);
            $query->bindParam(':id_r', $id_r);
            $query->bindParam(':date_check_in', $date_check_in);
            $query->bindParam(':date_check_in', $date_check_out);
            $query->bindParam(':nbr_p', $nbr_p);
            $query->bindParam(':status', $status);
            $query->bindParam(':id_e', $id_e);

            $query->execute();
        } catch (Exception $e) {
            die('Error: ' . $e->getMessage());
        }
    }
    public function getReservationById($id)
    {
        $sql = "SELECT * FROM reservation WHERE id_r = :id_r";
        $db = config::getConnexion();
        $query = $db->prepare($sql);
        $query->bindParam(':id_r', $id_r);
        $query->execute();
        return $query->fetch(PDO::FETCH_ASSOC);
    }


    public function getReservationByEvent($id_e) {
        $sql = "SELECT * FROM reservation WHERE id_e = :id_e";
        $db = config::getConnexion();
        $query = $db->prepare($sql);
        $query->bindParam(":id_e", $id_pays, PDO::PARAM_INT);
        $query->execute();
        return $query->fetchAll(PDO::FETCH_ASSOC); // Retourne un tableau de commentaires
    }
}
?>
