<?php
include 'C:/xampp/htdocs/vacation/controller/unityuserU.php' ;

// Vérifie si la requête est de type POST
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Récupère les données JSON envoyées dans le corps de la requête
    $jsonData = file_get_contents('php://input');
    $data = json_decode($jsonData, true);
    
    // Vérifie si l'ID est présent dans les données
    if(isset($data['id'])) {
        $id = $data['id'];
        
        // Appelle la fonction pour mettre à jour l'état de l'utilisateur
        updateEtatUnityuserEtat($id);
        
        // Répond avec un code 200 (OK)
        http_response_code(200);
        echo json_encode(array("message" => "L'état de l'utilisateur a été mis à jour avec succès."));
    } else {
        // Répond avec un code 400 (Bad Request) si l'ID n'est pas présent
        http_response_code(400);
        echo json_encode(array("message" => "Erreur : ID manquant dans les données."));
    }
} else {
    // Répond avec un code 405 (Method Not Allowed) si la méthode de requête n'est pas valide
    http_response_code(405);
    echo json_encode(array("message" => "Erreur : Méthode de requête non valide."));
}

// Fonction pour mettre à jour l'état de l'utilisateur
function updateEtatUnityuserEtat($id)
{   
    try {
        $db = config::getConnexion();
        $query = $db->prepare(
            'UPDATE unityuser 
            SET etat = :etat
            WHERE id = :id'
        );
        
        // La valeur par défaut pour l'attribut etat est 2
        $defaultEtat = 2;

        $query->execute([
            'id' => $id,
            'etat' => $defaultEtat
        ]);
        
    } catch (PDOException $e) {
        // Gérer les exceptions
        http_response_code(500); // Erreur interne du serveur
        echo json_encode(array("message" => "Erreur de serveur : " . $e->getMessage()));
    }
}
?>
