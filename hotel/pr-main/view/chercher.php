<?php
include '../controller/HotelC.php';

// Vérification si une requête de recherche a été envoyée
if(isset($_GET['query'])) {
    $query = $_GET['query'];

    $hotelC = new HotelC();
    $hotels = $hotelC->chercherHotels($query);

    if ($hotels) {
        // Afficher les résultats de la recherche
        foreach ($hotels as $hotel) {
            // Afficher les informations de l'hôtel
             "ID: " . $hotel['id'] . "<br>";
             "Nom: " . $hotel['Nom'] . "<br>";
             "Adresse: " . $hotel['Adresse'] . "<br>";
             "Ville: " . $hotel['Ville'] . "<br>";
             "Code Postal: " . $hotel['Code_postal'] . "<br>";
             "Pays: " . $hotel['Pays'] . "<br>";
             "Téléphone: " . $hotel['Tel'] . "<br>";
             "Email: " . $hotel['Email'] . "<br>";
             "Image: <img src='./images/uploads/" . $hotel['image'] . "' alt='Hotel Image'><br>";
             "<hr>"; // Séparateur entre les hôtels
        }
    } else {
        echo "Aucun hôtel trouvé pour cette recherche.";
    }
} else {
    // Rediriger vers la liste des hôtels si aucune requête de recherche n'a été envoyée
    header("Location: listeHotels.php");
    exit();
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Liste des Hôtels</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #6c757d;
            margin: 0;
            padding: 0;
        }

        .container {
            max-width: 1200px;
            margin: 20px auto;
            padding: 20px;
            background-color:#ffc107;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            text-align: center; /* Pour centraliser le contenu */
        }

        .container1 {
            max-width: 1200px;
            margin: 20px auto;
            padding: 20px;
            background-color: #F5F5DC;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            text-align: center; /* Pour centraliser le contenu */
        }

        h1 {
            text-align: center;
            margin-bottom: 20px;
            color: #333;
        }

        table {
            border-collapse: collapse;
            width: 100%;
        }

        th,
        td {
            border: 1px solid #ddd;
            padding: 8px;
            text-align: center;
        }

        th {
            background-color: #f2f2f2;
        }

        img {
            max-width: 50px;
            max-height: 50px;
            border: 2px solid gray;
            border-radius: 8px;
            object-fit: cover;
        }

        .add-hotel-button {
            display: inline-block;
            background-color: #343a40 ; /* Nouvelle couleur */
            color: #fff;
            border: none;
            padding: 10px 20px;
            border-radius: 5px;
            text-decoration: none;
            font-size: 16px;
            cursor: pointer;
            transition: background-color 0.3s;
        }

        .add-hotel-button:hover {
            background-color: #6c757d; /* Couleur au survol */
        }

        .no-hotel-message {
            text-align: center;
            color: #666;
        }

        .title-container {
            margin-bottom: 20px;
        }

        .search-container {
            margin-bottom: 20px; /* Espacement entre la barre de recherche et le bouton */
        }
       
    </style>
</head>

<body>
    <div class="container">
        <div class="title-container">
            <h1 class="title" style="font-weight: bold;">Liste des hotels</h1>
        </div>
    </div>
    <div class="container1">
        
        <?php if ($hotels): ?>
        <table>
            <tr>
                <th>ID</th>
                <th>Nom</th>
                <th>Adresse</th>
                <th>Ville</th>
                <th>Code Postal</th>
                <th>Pays</th>
                <th>Téléphone</th>
                <th>Email</th>
                <th>Image</th>
                <th>Modifier</th>
                <th>Supprimer</th>
            </tr>
            <?php foreach ($hotels as $hotel): ?>
            <tr>
                <td><?= $hotel['id']; ?></td>
                <td><?= $hotel['Nom']; ?></td>
                <td><?= $hotel['Adresse']; ?></td>
                <td><?= $hotel['Ville']; ?></td>
                <td><?= $hotel['Code_postal']; ?></td>
                <td><?= $hotel['Pays']; ?></td>
                <td><?= $hotel['Tel']; ?></td>
                <td><?= $hotel['Email']; ?></td>
                <td><img src="./images/uploads/<?= $hotel['image']; ?>" alt="Hotel Image"></td>
                <td align="center">
                    <form action="editprof.php" method="get">
                        <input type="hidden" name="id" value="<?php echo $hotel['id']; ?>">
                        <button type="submit" style="border: none; background: none; padding: 0; margin: 0; cursor: pointer;">
                            <img src="btn1_modify.png" alt="Update">
                        </button>
                    </form>
                </td>
                <td>
                    <form action="../View/deleteprof.php" method="get">
                        <input type="hidden" name="id" value="<?php echo $hotel['id']; ?>">
                        <button type="submit" style="border: none; background: none; padding: 0; margin: 0; cursor: pointer;">
                            <img src="btn3_delete.jpg" alt="Delete">
                        </button>
                    </form>
                </td>
            </tr>
            <?php endforeach; ?>
        </table>
        <?php else: ?>
        <p class="no-hotel-message">Aucun hôtel trouvé.</p>
        <?php endif; ?>
    </div>
</body>

</html>


