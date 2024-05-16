<?php
include '../config.php'; // Inclure le fichier config.php
include '../Model/User.php'; // Inclure le fichier Hotel.php

class UserC
{
    public function listUser()
    {
        $sql = "SELECT * FROM user";
        $db = Config::getConnexion();
        try {
            $stmt = $db->query($sql);
            $data = $stmt->fetchAll(PDO::FETCH_ASSOC);
            return $data;
        } catch (Exception $e) {
            die('Error:' . $e->getMessage());
        }
    }

    public function deleteUser($id)
    {
        $sql = "DELETE FROM user WHERE id = :id";
        $db = Config::getConnexion();
        $req = $db->prepare($sql);
        $req->bindValue(':id', $id);

        try {
            $req->execute();
        } catch (Exception $e) {
            die('Error:' . $e->getMessage());
        }
    }

    public function ajouterUser($user)
    {
        $sql = "INSERT INTO user VALUES (NULL, :Nom, :Prenom, :DOB, :email, :mdp, :CIN,:image ,:phone)";
        $db = Config::getConnexion();
        try {
            $query = $db->prepare($sql);
            $query->execute([
                'Nom' => $user->getNom(),
                'Prenom' => $user->getPrenom(),
                'DOB' => $user->getDOB(),
                'email' => $user->getemail(),
                'mdp' => $user->getmdp(),
                'CIN' => $user->getCIN(), // Utilisation de la méthode getTelephone() pour récupérer le numéro de téléphone
                'phone' => $user->getphone(),
                'image' => $user->getImage()
                //'image' => $hotel->getetoile()
                
            ]);
            echo "User ajouté avec succès.";
        } catch (Exception $e) {
            echo 'Error: ' . $e->getMessage();
        }
    }
    

    
    public function updateUnityuser($id, $nom, $prenom, $email, $mdp, $tel, $tache, $sexe, $etat)
    {
        $db = config::getConnexion();
        try {
            // Define your SQL query
            $sql = "UPDATE unityuser SET nom = :nom, prenom = :prenom, email = :email, mdp = :mdp, tel = :tel, tache = :tache, sexe = :sexe, etat = :etat WHERE id = :id";
            
            // Prepare the SQL query
            $query = $db->prepare($sql);
            
            // Bind parameters
            $query->bindParam(':id', $id);
            $query->bindParam(':nom', $nom);
            $query->bindParam(':prenom', $prenom);
            $query->bindParam(':email', $email);
            $query->bindParam(':mdp', $mdp);
            $query->bindParam(':tel', $tel);
            $query->bindParam(':tache', $tache);
            $query->bindParam(':sexe', $sexe);
            $query->bindParam(':etat', $etat);
            
            // Execute the query
            $query->execute();
            
            echo $query->rowCount() . " records updated successfully";
        } catch (Exception $e) {
            die('Error: ' . $e->getMessage());
        }
    }

    
public function getUserById($id)
    {
        $sql = "SELECT * FROM user WHERE id = :id";
        $db = config::getConnexion();
        $query = $db->prepare($sql);
        $query->bindParam(':id', $id);
        $query->execute();
        return $query->fetch(PDO::FETCH_ASSOC);
    }

  

public function chercherUsers($query) {
    $db = config::getConnexion();
    $stmt = $db->prepare("SELECT * FROM user WHERE Nom LIKE ? OR Prenom LIKE ? OR CIN LIKE ?");
    $stmt->execute(["%$query%", "%$query%", "%$query%"]);
    $users = $stmt->fetchAll();
    return $users;
}
public function getuser($id) 
    {
        // Assurez-vous d'utiliser une requête SQL sécurisée pour éviter les injections SQL
        $sql = "SELECT * FROM unityuser WHERE id = :id";
        $db = config::getConnexion();
        $query = $db->prepare($sql);
        $query->bindParam(':id', $id);
        $query->execute();
        return $query->fetch(PDO::FETCH_ASSOC);
    }




}
?>