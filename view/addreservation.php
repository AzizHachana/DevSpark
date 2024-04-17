<?php
// Vérification si des données sont envoyées depuis le formulaire
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Traitement des données de réservation
    // ...
    // Redirection vers une page de confirmation ou traitement supplémentaire
    header("Location: confirmation.php");
    exit;
}

// Récupération de l'identifiant de l'hôtel depuis l'URL
if (isset($_GET['hotel_id'])) {
    $hotel_id = $_GET['hotel_id'];

    // Vous devez récupérer les informations de l'hôtel depuis la base de données en utilisant son ID
    // Remplacez les lignes ci-dessous par votre logique de récupération depuis la base de données
    // Assurez-vous d'utiliser des requêtes préparées pour éviter les injections SQL

    // Exemple avec PDO
    $pdo = new PDO(
        'mysql:host=localhost;dbname=atelierphp',
        'root',
        '',
        [
            PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
            PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC
        ]
        );
    $query = "SELECT * FROM hotel WHERE id = ?";
    $statement = $pdo->prepare($query);
    $statement->execute([$hotel_id]);
    $hotel_info = $statement->fetch(PDO::FETCH_ASSOC);

    // Vérification si l'hôtel existe
    if (!$hotel_info) {
        // Redirection vers une page d'erreur si l'hôtel n'existe pas
        header("Location: erreur.php");
        exit;
    }
} else {
    // Redirection vers une page d'erreur si aucune ID d'hôtel n'est fournie
    header("Location: erreur.php");
    exit;
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Réserver</title>
    <style>
       .container {
    max-width: 1200px;
    margin: 20px auto;
    padding: 20px;
    background-color: rgba(255, 255, 255, 0.9);
   
    border: 1px solid #ccc;
    border-radius: 10px;
    /*box-shadow: 0 1px 200px rgba(0, 0, 0, 0.1); /* Ombre plus prononcée */
    box-shadow: 0 1px 20px rgba(0, 0, 0, 0.2);
    /* Bordure légère */
    text-align: center;
    position: relative; /* Position relative pour positionner le reflet */
}




    </style>
</head>
<body>
    <div class="container">
        <div class="hotel-info">
        <h2><?= $hotel_info['Nom']; ?></h2>
        <p><?= $hotel_info['Adresse']; ?></p>
            <img src="./images/uploads/<?= $hotel_info['image']; ?>" alt="">
            
            <p><?= $hotel_info['Adresse']; ?></p>
            <p><?= $hotel_info['Ville']; ?>, <?= $hotel_info['Pays']; ?></p>
            <p>Téléphone: <?= $hotel_info['Tel']; ?></p>
            <p>Email: <?= $hotel_info['Email']; ?></p>
        </div>
        <div class="reservation-form">
            <h2>Passer une réservation</h2>
            <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
                <input type="hidden" name="hotel_id" value="<?= $hotel_id; ?>">
                <!-- Ajout d'un champ caché pour passer l'identifiant de l'hôtel -->
                <label for="date_arrivee">Date d'arrivée :</label>
                <input type="date" id="date_arrivee" name="date_arrivee" required><br><br>
                <label for="date_depart">Date de départ :</label>
                <input type="date" id="date_depart" name="date_depart" required><br><br>
                <!-- Autres champs de formulaire pour la réservation -->
                <input type="submit" value="Réserver">
            </form>
        </div>
    </div>
</body>
</html>
