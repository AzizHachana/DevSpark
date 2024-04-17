<?php
class reclam {
    private $conn;

    public function __construct($conn) {
        $this->conn = $conn;
    }
/************insertion******************* */
    public function createreclam($sujet, $description, $date_reclamation) {
        $sql = "INSERT INTO reclamation (sujet, description, date_reclamation) 
                VALUES (?, ?, ?)";
        $stmt = $this->conn->prepare($sql);
    $stmt->bind_param('sss', $sujet, $description, $date_reclamation);
        
        return $stmt->execute();
    }
    

    
    
/**********update*************** */
    public function updatereclam($id_reclamation, $sujet, $description, $date_reclamation) {
        // Vérifier d'abord si l'événement avec cet identifiant existe dans la base de données
        $check_sql = "SELECT id_reclamation FROM reclamation WHERE id_reclamation = ?";
        $check_stmt = $this->conn->prepare($check_sql);
        $check_stmt->bind_param('i', $id_reclamation);
        $check_stmt->execute();
        $check_stmt->store_result();

        // Si le collab existe, procéder à la mise à jour
        if ($check_stmt->num_rows > 0) {
            // Effectuer la mise à jour des données
            $update_sql = "UPDATE reclamation SET sujet=?, description=?, date_reclamation=? WHERE id_reclamation=?";
            $update_stmt = $this->conn->prepare($update_sql);
            $update_stmt->bind_param('ssss', $sujet, $description, $date_reclamation, $id_reclamation);
            $success = $update_stmt->execute();
            
            if ($success) {
                
            } else {
                return "Error updating event: " . $update_stmt->error;
            }
        } else {
           
            return "reclam with ID $id_reclamation not found.";
        }
    }
    
    /***************delete************** */
    public function deletereclam($id_reclamation) {
        // Vérifier d'abord si le colab avec cet identifiant existe dans la base de données
        $check_sql = "SELECT id_reclamation FROM reclamation WHERE id_reclamation = ?";
        $check_stmt = $this->conn->prepare($check_sql);
        $check_stmt->bind_param('i', $id_reclamation);
        $check_stmt->execute();
        $check_stmt->store_result();

        // Si colab existe, procéder à la suppression
        if ($check_stmt->num_rows > 0) {
            // Supprimer le colab de la base de données
            $delete_sql = "DELETE FROM reclamation WHERE id_reclamation = ?";
            $delete_stmt = $this->conn->prepare($delete_sql);
            $delete_stmt->bind_param('i', $id_reclamation);
            $success = $delete_stmt->execute();
            
            if ($success) {
                return "reclam deleted successfully!";
            } else {
                return "Error deleting reclam: " . $delete_stmt->error;
            }
        } else {
            // colab n'existe pas dans la base de données
            return "reclam with ID $id_reclamation not found.";
        }
    }

    /*************affichage*************** */

    public function getAllreclams() {
        $reclams = array();

        $sql = "SELECT id_reclamation, sujet, description, date_reclamation FROM reclamation";
        $result = mysqli_query($this->conn, $sql);

        if(mysqli_num_rows($result) > 0) {
            
            while($row = mysqli_fetch_assoc($result)) {
                $reclams[] = $row;
            }
        }

        return $reclams;
    }
    
    
}


?>